<?
$subject_val = "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 25 14:13:24 2010" -->
<!-- isoreceived="20100425181324" -->
<!-- sent="Sun, 25 Apr 2010 13:11:14 -0500" -->
<!-- isosent="20100425181114" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to &amp;quot;guess&amp;quot; the incoming data type ?" -->
<!-- id="COL117-DS1942F9A05F3D8A135C02DAE9050_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1272203168.4867.8257.camel_at_zlarin" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?<br>
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-25 14:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12771.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12769.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12768.php">Sylvestre Ledru: "[OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12773.php">Eugene Loh: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think there is a way to guess, that is why most languages use a
<br>
naming type (i.e.: int, float, etc) to explicitly tell what the type is. If
<br>
this app is letting them enter whatever they want and without knowing more
<br>
about this application, then I could assume it is giving them the type of
<br>
string as languages such as Visual Basic, Visual C++ and C# do in the GUI.
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Sylvestre Ledru
<br>
Sent: Sunday, April 25, 2010 8:46 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] How to &quot;guess&quot; the incoming data type ?
<br>
<p>Hello,
<br>
<p><p>I am currently extending an application with MPI capabilities. 
<br>
This high-level application allows users to use dynamic types. Therefor,
<br>
on the slaves, I have no way to know what the master will send me.
<br>
<p>Therefor, in the slave side, I need to &quot;guess&quot; what I am receiving.
<br>
<p>For example, I am using contiguous data on the master defined this way:
<br>
<p>MPI_Datatype matrixOfDouble;
<br>
MPI_Type_contiguous(size, MPI_DOUBLE, &amp;matrixOfDouble);
<br>
MPI_Type_commit(&amp;matrixOfDouble);
<br>
<p>sent this way:
<br>
double A[] = {1,3,3,2,3,4};
<br>
MPI_Send(&amp;A, 1, matrixOfDouble, i, TAG, MPI_COMM_WORLD);
<br>
<p><p>On the slave, in my example, since I know I am going to receive a
<br>
matrixOfDouble, I can do the following:
<br>
MPI_Probe( MPI_ANY_SOURCE, TAG, MPI_COMM_WORLD, &amp;stat );
<br>
MPI_Get_elements( &amp;stat, matrixOfDouble, &amp;count);
<br>
double BRecv[count];
<br>
MPI_Recv(BRecv, BUFSIZE, matrixOfDouble, i, TAG, MPI_COMM_WORLD, &amp;stat)
<br>
<p>I would like to know if (and how) it is possible on the slave side to
<br>
know that the received type is matrixOfDouble ?
<br>
<p>If it is not possible, is there any other way in MPI ?
<br>
(I would like to avoid a extra master=&gt; slave message to send the type).
<br>
<p>Thanks
<br>
Sylvestre
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12771.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12769.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12768.php">Sylvestre Ledru: "[OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12773.php">Eugene Loh: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
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
