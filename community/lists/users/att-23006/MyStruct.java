/* Data structure and methods for a small data object.
 *
 *
 * File: MyStruct.java			Author: S. Gross
 * Date: 12.09.2013
 *
 */

import mpi.*;

public class MyStruct extends Struct
{
  private final static int MAX_NAME = 32;

  /* define buffer positions and the structure of the buffer 		*/
  private final int age       = addInt (),
                    fNameLen  = addInt (),
		    firstName = addChar (MAX_NAME),
                    lNameLen  = addInt (),
		    lastName  = addChar (MAX_NAME),
		    salary    = addDouble ();


  /* This method tells the super class how to create a data object      */
  @Override protected Data newData ()
  {
    return new Data ();
  }


  /* Read or write "structure components"				*/
  public class Data extends Struct.Data
  {
    public int getAge ()
    {
      return getInt (age);
    }


    public String getFirstName ()
    {
      int length = getInt (fNameLen);
      StringBuilder sb = new StringBuilder ();

      for (int i = 0; i < length; ++i)
      {
        sb.append(getChar (firstName, i));
      }
      return sb.toString ();
    }


    public String getLastName ()
    {
      int length = getInt (lNameLen);
      StringBuilder sb = new StringBuilder ();

      for (int i = 0; i < length; ++i)
      {
	sb.append(getChar (lastName, i));
      }
      return sb.toString ();
    }


    public double getSalary ()
    {
      return getDouble (salary);
    }


    public void setAge (int newAge)
    {
      putInt (age, newAge);
    }


    public void setFirstName (String newFirstName)
    {
      int length = Math.min (newFirstName.length (), MAX_NAME);

      putInt (fNameLen, length);
      for(int i = 0; i < length; ++i)
      {
	putChar (firstName, i, newFirstName.charAt (i));
      }
    }


    public void setLastName (String newLastName)
    {
      int length = Math.min (newLastName.length (), MAX_NAME);

      putInt (lNameLen, length);
      for (int i = 0; i < length; ++i)
      {
	putChar (lastName, i, newLastName.charAt (i));
      }
    }


    public void setSalary (double newSalary)
    {
      putDouble (salary, newSalary);
    }
  }
}
