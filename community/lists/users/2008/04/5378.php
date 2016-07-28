<?
$subject_val = "Re: [OMPI users] Passing data structure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 13:46:56 2008" -->
<!-- isoreceived="20080411174656" -->
<!-- sent="Fri, 11 Apr 2008 19:47:07 +0200" -->
<!-- isosent="20080411174707" -->
<!-- name="Danesh Daroui" -->
<!-- email="Danesh.D_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing data structure" -->
<!-- id="47FFA41B.7090006_at_bredband.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3345ae180804110933m3bb9e35cpbbd65fd9c8f438ec_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passing data structure<br>
<strong>From:</strong> Danesh Daroui (<em>Danesh.D_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 13:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>Previous message:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
<li><strong>In reply to:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alessandro,
<br>
<p>As far as I understood , you want to send a row of your two dimensional 
<br>
array using MPI sending functions.
<br>
This is of course possible in a simple way. You can send/receive data 
<br>
with any type and any size using MPI
<br>
but you should tell MPI the type your data using MPI_Datatype structure. 
<br>
For example code below send 10
<br>
integers in an array of ints in C:
<br>
<p>int temp[10];
<br>
.
<br>
.
<br>
.
<br>
MPI_Send(tmp, 10, MPI_INT, procID, mtag, THECOM);
<br>
<p>Use this link to see a complete list of MPI data types:
<br>
<p><p><a href="http://users.cs.cf.ac.uk/David.W.Walker/mpitutorial/node50.html">http://users.cs.cf.ac.uk/David.W.Walker/mpitutorial/node50.html</a>
<br>
<p>Cheers,
<br>
<p>Danesh
<br>
<p><p><p>Alessandro Palandri skrev:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a new user of MPI and I would like to have your opinion on the 
</span><br>
<span class="quotelev1">&gt; following issue.
</span><br>
<span class="quotelev1">&gt; With 1 processor I keep the data in 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; std::vector&lt;std::vector&lt;double&gt; &gt; X
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I call a function that takes various arguments, among which X[ i 
</span><br>
<span class="quotelev1">&gt; ] and X[ j ], i.e. two sub-vectors of X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With MPI I would have the same function execute on different 
</span><br>
<span class="quotelev1">&gt; processors for different values of i and j in X[ i ] and X[ j ].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my understanding since std::vector is not an MPI type it cannot 
</span><br>
<span class="quotelev1">&gt; be passed neither as a message nor an element of an MPI structure. I 
</span><br>
<span class="quotelev1">&gt; thought of using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double X[200][4000]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which MPI would pass but I don't see how to isolate a single row, i.e. 
</span><br>
<span class="quotelev1">&gt; X[99] would not make sense in this context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion for an efficient and possibly simple solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alessandro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>Previous message:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
<li><strong>In reply to:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
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
