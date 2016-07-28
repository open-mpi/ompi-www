/* Data structures and methods for a data object.
 *
 * At first "javac MyData.java" complained about a missing
 * serialVersionUID (warning: [serial] serializable class MyData
 * has no definition of serialVersionUID) so that I had to create
 * one to get rid of this warning.
 *
 * Creating serialVersionUID:
 *   javac MyData.java
 *   serialver MyData   -> returns "serialVersionUID",
 *     e.g.
 *     "static final long serialVersionUID = -5243516570672186644L;"
 *     ->  store this output into the class
 *
 *
 * File: MyData.java			Author: S. Gross
 * Date: 11.10.2012
 *
 */

public class MyData implements java.io.Serializable
{
  static final long serialVersionUID = -5243516570672186644L;

  private int	 age;
  private String name;
  private double salary;

  public MyData ()
  {
    age    = 0;
    name   = "";
    salary = 0.0;
  }

  public void setAge (int newAge)
  {
    age = newAge;
  }

  public int getAge ()
  {
    return age;
  }

  public void setName (String newName)
  {
    name = newName;
  }

  public String getName ()
  {
    return name;
  }

  public void setSalary (double newSalary)
  {
    salary = newSalary;
  }

  public double getSalary ()
  {
    return salary;
  }
}
