/* Some methods to print elements of different arrays.
 *
 * The following methods are available for (p,q)-matrices and vectors
 * with p elements. "P2Din1D" prints 2-dimensional arrays which are
 * stored in a contiguous 1-dimensional memory area. "P1D" inserts a
 * "newline" after "elem_per_line" elements. All other methods insert
 * a "newline" after each row of a the matrix.
 *
 *  static void P2D (int p, int q, double[][] matrix)
 *  static void P2Din1D (int p, int q, double[] matrix)
 *  static void P1D (int p, int elem_per_line, double[] vector)
 *
 *  static void P2D (int p, int q, int[][] matrix)
 *  static void P2Din1D (int p, int q, int[] matrix)
 *  static void P1D (int p, int elem_per_line, int[] vector)
 *
 *
 * File: PrintArray.java		Author: S. Gross
 * Date: 15.01.2013
 *
 */

public class PrintArray
{
  static void P2D (int p, int q, double[][] matrix)
  {
    for (int i = 0; i < p; ++i)
    {
      for (int j = 0; j < q; ++j)
      {
	System.out.printf ("%10.2f", matrix[i][j]);
      }
      System.out.println ();
    }
    System.out.println ();
  }


  static void P2Din1D (int p, int q, double[] matrix)
  {
    for (int i = 0; i < p; ++i)
    {
      for (int j = 0; j < q; ++j)
      {
	System.out.printf ("%10.2f", matrix[i * q + j]);
      }
      System.out.println ();
    }
    System.out.println ();
  }


  static void P1D (int p, int elem_per_line, double[] vector)
  {
    for (int i = 0; i < p; ++i)
    {
      if (((i + 1) % elem_per_line) == 0)
      {
	System.out.printf ("%10.2f\n", vector[i]);
      }
      else
      {
	System.out.printf ("%10.2f", vector[i]);
      }
    }
    System.out.println ();
  }


  static void P2D (int p, int q, int[][] matrix)
  {
    for (int i = 0; i < p; ++i)
    {
      for (int j = 0; j < q; ++j)
      {
	System.out.printf ("%8d", matrix[i][j]);
      }
      System.out.println ();
    }
    System.out.println ();
  }


  static void P2Din1D (int p, int q, int[] matrix)
  {
    for (int i = 0; i < p; ++i)
    {
      for (int j = 0; j < q; ++j)
      {
	System.out.printf ("%8d", matrix[i * q + j]);
      }
      System.out.println ();
    }
    System.out.println ();
  }


  static void P1D (int p, int elem_per_line, int[] vector)
  {
    for (int i = 0; i < p; ++i)
    {
      if (((i + 1) % elem_per_line) == 0)
      {
	System.out.printf ("%8d\n", vector[i]);
      }
      else
      {
	System.out.printf ("%8d", vector[i]);
      }
    }
    System.out.println ();
  }
}
