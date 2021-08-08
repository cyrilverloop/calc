import { assert } from 'chai';
import Calculator from '../../assets/js/Calculator.js';

suite('Calculator', function() {

    test('can add.', function() {
        let calculator = new Calculator();

        assert.strictEqual(
            calculator.add(1, 1),
            2,
            'The result of the addition must be 2.'
        );
    });
});
