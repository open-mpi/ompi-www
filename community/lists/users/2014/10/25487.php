<?
$subject_val = "Re: [OMPI users] Derived data in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 17:16:08 2014" -->
<!-- isoreceived="20141010211608" -->
<!-- sent="Fri, 10 Oct 2014 22:16:06 +0100" -->
<!-- isosent="20141010211606" -->
<!-- name="Atsugua Ada" -->
<!-- email="smc7910_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Derived data in Java" -->
<!-- id="CAOVgqRxkQM6Ue46ivPH5jLBQTGPPHuej9RwJuhh_i8Uvv5Du4Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54370145.6050700_at_dsic.upv.es" -->
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
<strong>From:</strong> Atsugua Ada (<em>smc7910_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-10 17:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25488.php">Mike Dubman: "Re: [OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>Previous message:</strong> <a href="25486.php">Gary Jackson: "[OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>In reply to:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Oscar,
<br>
<p>your comments and code was very helpful! Thanks a lot for your help.
<br>
<p>Cheers
<br>
<p>2014-10-09 22:42 GMT+01:00 Oscar Vega-Gisbert &lt;ovega_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello Atsugua,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can only send contiguous data, i.e. arrays of basic datatypes (byte,
</span><br>
<span class="quotelev1">&gt; char, short, boolean, int, long, float and double) or direct buffers. If
</span><br>
<span class="quotelev1">&gt; you need to send complex data, then you must serialize into an array or a
</span><br>
<span class="quotelev1">&gt; direct buffer. This is made using using the mpi.Struct class, which
</span><br>
<span class="quotelev1">&gt; represents the MPI_STRUCT datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A user-defined struct must be a subclass of Struct and it must have three
</span><br>
<span class="quotelev1">&gt; parts:
</span><br>
<span class="quotelev1">&gt; 1. A number of data fields defined using the add[Type]() methods, that
</span><br>
<span class="quotelev1">&gt; return the corresponding offsets according to the size of the type. The
</span><br>
<span class="quotelev1">&gt; offsets must be stored because they will be necessary to access data.
</span><br>
<span class="quotelev1">&gt; 2. A subclass of Struct.Data with get/put methods to access data. These
</span><br>
<span class="quotelev1">&gt; methods will need the previously stored offsets.
</span><br>
<span class="quotelev1">&gt; 3. The implementation of the method newData() in order to tell the library
</span><br>
<span class="quotelev1">&gt; how to create Data objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another question is the String class. It is not supported because it is a
</span><br>
<span class="quotelev1">&gt; variable sized object. When it is necessary sending strings you must use
</span><br>
<span class="quotelev1">&gt; char arrays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attached a similar example to what you want.
</span><br>
<span class="quotelev1">&gt; Instead of defining two strings you have an int and a string.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Oscar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; El 09/10/14 16:27, Atsugua Ada escribi&#195;&#179;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, I am using Open-MPI 1.8.3 for Java. I would like to know how to
</span><br>
<span class="quotelev2">&gt;&gt; create a derived datatype that enables the sending of an array of complex
</span><br>
<span class="quotelev2">&gt;&gt; data (objects, strings, etc.) to each processor. In fact, I want to create
</span><br>
<span class="quotelev2">&gt;&gt; an array of string or objects and sending a part of this array to each
</span><br>
<span class="quotelev2">&gt;&gt; proccess.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.g., I created the next class:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; |/class  Data{
</span><br>
<span class="quotelev2">&gt;&gt;     String  data1;
</span><br>
<span class="quotelev2">&gt;&gt;     String  data2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     public  Data(String  d1,  String  d2)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;          this.data1=  d1;
</span><br>
<span class="quotelev2">&gt;&gt;          this.data2=  d2;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; }/|
</span><br>
<span class="quotelev2">&gt;&gt; |and then a array of Data objects is created|
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; |/      Data[]  myData=  new  Data[4];        myData[0]  =  new
</span><br>
<span class="quotelev2">&gt;&gt; Data(&quot;d1&quot;,  &quot;this is a test&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;       ....
</span><br>
<span class="quotelev2">&gt;&gt;       myData[3]  =  new  Data(&quot;the third data&quot;,  &quot;this is another
</span><br>
<span class="quotelev2">&gt;&gt; test&quot;);/||
</span><br>
<span class="quotelev2">&gt;&gt; |How can I create the datatype to send, e.g., myData[0] and [1] to proc#1
</span><br>
<span class="quotelev2">&gt;&gt; and the remaining to the proc#2?|
</span><br>
<span class="quotelev2">&gt;&gt; |Thanks.|
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/">http://www.open-mpi.org/community/lists/users/2014/10/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 25480.php
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25482.php">http://www.open-mpi.org/community/lists/users/2014/10/25482.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25488.php">Mike Dubman: "Re: [OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>Previous message:</strong> <a href="25486.php">Gary Jackson: "[OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>In reply to:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<!-- nextthread="start" -->
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
