<?
$subject_val = "Re: [OMPI users] Derived data in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 17:43:00 2014" -->
<!-- isoreceived="20141009214300" -->
<!-- sent="Thu, 09 Oct 2014 23:42:29 +0200" -->
<!-- isosent="20141009214229" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Derived data in Java" -->
<!-- id="54370145.6050700_at_dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOVgqRx-DvnDj=eQNCf__EK0Qc+mQdteQooJak7G07OK9BhqJw_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Derived data in Java<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-09 17:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25483.php">Gary Jackson: "[OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Previous message:</strong> <a href="25481.php">Rolf vandeVaart: "[OMPI users] CUDA-aware Users"</a>
<li><strong>In reply to:</strong> <a href="25480.php">Atsugua Ada: "[OMPI users] Derived data in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25487.php">Atsugua Ada: "Re: [OMPI users] Derived data in Java"</a>
<li><strong>Reply:</strong> <a href="25487.php">Atsugua Ada: "Re: [OMPI users] Derived data in Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Atsugua,
<br>
<p>You can only send contiguous data, i.e. arrays of basic datatypes (byte, 
<br>
char, short, boolean, int, long, float and double) or direct buffers. If 
<br>
you need to send complex data, then you must serialize into an array or 
<br>
a direct buffer. This is made using using the mpi.Struct class, which 
<br>
represents the MPI_STRUCT datatype.
<br>
<p>A user-defined struct must be a subclass of Struct and it must have 
<br>
three parts:
<br>
1. A number of data fields defined using the add[Type]() methods, that 
<br>
return the corresponding offsets according to the size of the type. The 
<br>
offsets must be stored because they will be necessary to access data.
<br>
2. A subclass of Struct.Data with get/put methods to access data. These 
<br>
methods will need the previously stored offsets.
<br>
3. The implementation of the method newData() in order to tell the 
<br>
library how to create Data objects.
<br>
<p>Another question is the String class. It is not supported because it is 
<br>
a variable sized object. When it is necessary sending strings you must 
<br>
use char arrays.
<br>
<p>I attached a similar example to what you want.
<br>
Instead of defining two strings you have an int and a string.
<br>
<p>Regards,
<br>
Oscar
<br>
<p>El 09/10/14 16:27, Atsugua Ada escribi&#243;:
<br>
<span class="quotelev1">&gt; Hello, I am using Open-MPI 1.8.3 for Java. I would like to know how to 
</span><br>
<span class="quotelev1">&gt; create a derived datatype that enables the sending of an array of 
</span><br>
<span class="quotelev1">&gt; complex data (objects, strings, etc.) to each processor. In fact, I 
</span><br>
<span class="quotelev1">&gt; want to create an array of string or objects and sending a part of 
</span><br>
<span class="quotelev1">&gt; this array to each proccess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., I created the next class:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; |/class  Data{
</span><br>
<span class="quotelev1">&gt;     String  data1;
</span><br>
<span class="quotelev1">&gt;     String  data2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     public  Data(String  d1,  String  d2)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;          this.data1=  d1;
</span><br>
<span class="quotelev1">&gt;          this.data2=  d2;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }/|
</span><br>
<span class="quotelev1">&gt; |and then a array of Data objects is created|
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |/      Data[]  myData=  new  Data[4];  
</span><br>
<span class="quotelev1">&gt;       myData[0]  =  new  Data(&quot;d1&quot;,  &quot;this is a test&quot;);
</span><br>
<span class="quotelev1">&gt;       ....
</span><br>
<span class="quotelev1">&gt;       myData[3]  =  new  Data(&quot;the third data&quot;,  &quot;this is another test&quot;);/||
</span><br>
<span class="quotelev1">&gt; |How can I create the datatype to send, e.g., myData[0] and [1] to proc#1 and the remaining to the proc#2?|
</span><br>
<span class="quotelev1">&gt; |Thanks.|
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25480.php">http://www.open-mpi.org/community/lists/users/2014/10/25480.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/x-java attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25482/DerivedData.java">DerivedData.java</a>
</ul>
<!-- attachment="DerivedData.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25483.php">Gary Jackson: "[OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Previous message:</strong> <a href="25481.php">Rolf vandeVaart: "[OMPI users] CUDA-aware Users"</a>
<li><strong>In reply to:</strong> <a href="25480.php">Atsugua Ada: "[OMPI users] Derived data in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25487.php">Atsugua Ada: "Re: [OMPI users] Derived data in Java"</a>
<li><strong>Reply:</strong> <a href="25487.php">Atsugua Ada: "Re: [OMPI users] Derived data in Java"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
