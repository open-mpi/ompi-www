<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 12:44:12 2010" -->
<!-- isoreceived="20100311174412" -->
<!-- sent="Thu, 11 Mar 2010 12:44:01 -0500" -->
<!-- isosent="20100311174401" -->
<!-- name="Cole, Derek E" -->
<!-- email="derek.e.cole_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="063591A1FD6A8143ACC2CA38F4C1B5EF85069E4F_at_HVXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.3408.1268304114.6605.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Cole, Derek E (<em>derek.e.cole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 12:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12329.php">Brock Palen: "[OMPI users] psm plm failure when infinipathlibs installed but no psm device present"</a>
<li><strong>Previous message:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Maybe in reply to:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12330.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12330.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am replying to this via the daily-digest message I got. Sorry it wasn't sooner... I didn't realize I was getting replies until I got the digest. Does anyone know how to change it so I get the emails as you all send them?
<br>
<p><span class="quotelev2">&gt;&gt;Unless your computation is so &quot;embarrassingly parallel&quot;  that each process can operate from start to end totally independent from the others, you should expect such an overlap, but you didn't tell what computation you want to do.
</span><br>
<p>I am doing a Red-black Gauss-Seidel algorithm. The ghost points are what I was trying to figure for moving this into the 3rd dimension. Thanks for adding some concrete-ness to my idea of exactly how much overhead is involved. The test domains I am computing on are on the order of 100*50*50 or so. This is why I am trying to limit the overhead of the MPI communication. I am in the process of finding out exactly how big the domains may become, so that I can adjust the algorithm accordingly.
<br>
<p><span class="quotelev2">&gt;&gt; PS - The same book &quot;MPI the complete reference&quot; has a thorough description of MPI types in Chapter 3.
</span><br>
You may want to create and use a MPI_TYPE_VECTOR with the appropriate count, blocklength, and stride, to exchange all the &quot;0..Z&quot; overlap slices in a single swoop.
<br>
(If I understood right, this is your main concern.)
<br>
<p>This is exactly what I was trying to do before, but I soon discovered you have to have your arrays tightly packed for this to work. Using a static array it is fine, but for dynamically sized arrays, there has to be a separate malloc() in C for the space, and then an array of pointers to that defined space to be able to use three-bracket notation. Tricky that it works like that (at least it was to me).
<br>
<p><span class="quotelev2">&gt;&gt;Also, I wonder why you want to decompose on both X and Y (&quot;pencils&quot;), and not only X (&quot;books&quot;), which may give you a smaller/simpler domain decomposition and communication footprint.
</span><br>
Whether you can or cannot do this way depends on your computation, which I don't know about.
<br>
<p>If I understand what you mean by pencils versus books, I don't think that will work for these types of calculations will it? Maybe a better explanation of what you mean by a pencil versus a book. If I was going to solve a sub-matrix of the XY plane for all Z-values, what is that considered? My plan was to share the appropriate top, bottom, left, and right neighbors (w.r.t. to the XY plane) but NOT the above/below neighbors (since I am calculating from 0..Z completely, in order).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12329.php">Brock Palen: "[OMPI users] psm plm failure when infinipathlibs installed but no psm device present"</a>
<li><strong>Previous message:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Maybe in reply to:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12330.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12330.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
