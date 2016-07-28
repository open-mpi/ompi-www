<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1000, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 15:05:05 2008" -->
<!-- isoreceived="20080909190505" -->
<!-- sent="Tue, 9 Sep 2008 15:05:01 -0400" -->
<!-- isosent="20080909190501" -->
<!-- name="Christopher Tanner" -->
<!-- email="christopher.tanner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1000, Issue 1" -->
<!-- id="D56C1B06-80B5-4403-B929-D6CB6CD9096F_at_gatech.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.15.1220976042.32255.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1000, Issue 1<br>
<strong>From:</strong> Christopher Tanner (<em>christopher.tanner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 15:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6487.php">Jeremy Stout: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6485.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6488.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Reply:</strong> <a href="6488.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeremy -
<br>
<p>I think I've found the problem / solution. With Ubuntu, there's a  
<br>
program called 'ldconfig' that updates the dynamic linker run-time  
<br>
bindings. Since Open MPI was compiled to use dynamic linking, these  
<br>
have to be updated. Thus, these commands have to be run on all of the  
<br>
nodes
<br>
<p>$ sudo ldconfig -v /usr/local/lib
<br>
$ sudo ldconfig -v /usr/local/lib/openmpi
<br>
<p>When installing from an RPM (in RedHat) or installing for a dpkg (in  
<br>
Debain), this linking is done automatically at the end of the install.  
<br>
However, if you compile from source, you have to link it manually.
<br>
<p>Now Open MPI runs fine. :)
<br>
<p>-------------------------------------------
<br>
Chris Tanner
<br>
Space Systems Design Lab
<br>
Georgia Institute of Technology
<br>
christopher.tanner_at_[hidden]
<br>
-------------------------------------------
<br>
<p>The library you specified in your post (libimf.so) is part of the
<br>
Intel Compiler Suite (fce and cce). You'll need to make those
<br>
libraries available to your computation nodes and update the
<br>
LD_LIBRARY_PATH accordingly.
<br>
<p>Jeremy Stout
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6487.php">Jeremy Stout: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6485.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6488.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Reply:</strong> <a href="6488.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
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
