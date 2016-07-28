<?
$subject_val = "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 16:25:37 2009" -->
<!-- isoreceived="20090130212537" -->
<!-- sent="Fri, 30 Jan 2009 22:25:28 +0100" -->
<!-- isosent="20090130212528" -->
<!-- name="Roy Dragseth" -->
<!-- email="roy.dragseth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5" -->
<!-- id="200901302225.28888.roy.dragseth_at_uit.no" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="77E70D73-B48A-431A-AE8D-4DF0895418F5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5<br>
<strong>From:</strong> Roy Dragseth (<em>roy.dragseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 16:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Reply:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 23 January 2009 15:31:59 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ew.  Yes, I can see this being a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that the real issue is that OMPI embeds the libltdl from
</span><br>
<span class="quotelev1">&gt; LT 2.2.6a inside libopen_pal (one of the internal OMPI libraries).
</span><br>
<span class="quotelev1">&gt; Waving my hands a bit, but it's not hard to imagine some sort of clash
</span><br>
<span class="quotelev1">&gt; is going on between the -lltdl you added to the command line and the
</span><br>
<span class="quotelev1">&gt; libltdl that is embedded in OMPI's libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that this is what is happening?
</span><br>
<p>Hi, sorry for the delay.
<br>
<p>I'm not very familiar with the workings of ltdl, I got this from one of our 
<br>
users.  Would you suggest that if one use openmpi 1.3 and ltdl you should not 
<br>
explicitly link with -lltdl?  At least this seems to work correctly with the 
<br>
example I posted. That is, I can link the program without specifying -lltdl so 
<br>
the symbol seems to resolve to something in the openmpi libraries and the 
<br>
example runs without crashing.
<br>
<p>Regards,
<br>
r.
<br>
<p><pre>
-- 
  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
              phone:+47 77 64 41 07, fax:+47 77 64 41 00
     Roy Dragseth, Team Leader, High Performance Computing
         Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Reply:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
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
