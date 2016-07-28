<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 10:16:06 2009" -->
<!-- isoreceived="20090724141606" -->
<!-- sent="Fri, 24 Jul 2009 10:15:47 -0400" -->
<!-- isosent="20090724141547" -->
<!-- name="jimkress_58" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler" -->
<!-- id="90A812338315445EBD353F8E61FC7C34_at_libraryPC" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EC9CBF07-2CCF-415F-B053-5D5FAAB9097D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler<br>
<strong>From:</strong> jimkress_58 (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 10:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10086.php">Alexey Sokolov: "[OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can avoid the &quot;library confusion problem&quot; by building 64 bit and 32 bit
<br>
version of openMPI in two different directories and then use mpi-selector
<br>
(on your head and compute nodes) to switch between the two.
<br>
<p>Just my $0.02
<br>
<p>Jim
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Friday, July 24, 2009 7:22 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel
<br>
compiler
<br>
<p>On Jul 23, 2009, at 11:14 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 3. get a multi-node allocation and run &quot;pbsdsh echo $LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt; and see what libs you are defaulting to on the other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Be careful with this one; you want to ensure that your local shell  
<br>
doesn't expand $LD_LIBRARY_PATH and simply display the same value on  
<br>
all nodes.  It might be easiest to write a 2 line script and run that:
<br>
<p>$ cat myscript
<br>
#!/bin/sh
<br>
echo LD_LIB_PATH on `hostname` is: $LD_LIBRARY_PATH
<br>
$ chmod +x myscript
<br>
$ pdsh myscript
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10086.php">Alexey Sokolov: "[OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
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
