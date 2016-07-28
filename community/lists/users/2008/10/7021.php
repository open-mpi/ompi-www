<?
$subject_val = "Re: [OMPI users] Debian MPI -- mpirun missing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 13:25:45 2008" -->
<!-- isoreceived="20081017172545" -->
<!-- sent="Fri, 17 Oct 2008 12:25:38 -0500" -->
<!-- isosent="20081017172538" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debian MPI -- mpirun missing" -->
<!-- id="18680.51858.911379.218537_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1224261035.5841.35.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debian MPI -- mpirun missing<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 13:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Previous message:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>In reply to:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 October 2008 at 03:30, Terry Frankcombe wrote:
<br>
| &lt;snip&gt;
<br>
| &gt; Well when I use Open MPI I go with the new convention and call orterun
<br>
| &gt; instead of mpirun. I think you should have.  Maybe a local alias in your
<br>
| &gt; ~/.bashrc can do the trick.
<br>
| &gt; 
<br>
| &gt; Current packages do have mpirun.openmpi but we were unable to devise a
<br>
| &gt; bullet-proof scheme between lam, mpich and Open MPI for sharing / updating /
<br>
| &gt; ... the alternatives links as there are sublte differences that prevent us
<br>
| &gt; from switching all these aliases consistently.
<br>
| 
<br>
| Eh?  Surely it's a simple case of conflict?  If you want multiple
<br>
<p>It is not simple or else we'd do it. Trust us, several folks tried. 
<br>
<p>IIRC one of the issues was that among mpich, lam and Open MPI, the set of
<br>
supplied and potential conflicting apps (and their manual pages etc) is not
<br>
perfectly overlapping.
<br>
<p>| packages providing similar functionality, it's up to you to specify how
<br>
| the user should chose which one they want to run.  Breaking any
<br>
| particular package (or all packages) seems like a particularly poor
<br>
| choice, but that's only my opinion.
<br>
| 
<br>
| I would argue that orterun is a very long way from a &quot;new convention&quot;.
<br>
| I'd draw attention to section 8.8 of the MPI 2.1 standard.
<br>
| 
<br>
| But again, this is a discussion for the Debian list.
<br>
<p>In particularly for the 'package Open MPI maintainers' list at
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers">http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers</a>
<br>
<p>so if you want to continue this discussion, please take there.  
<br>
<p>We can also point you to a couple of discussion in the Debian bug tracking
<br>
system, for example
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bugs.debian.org/452047">http://bugs.debian.org/452047</a>
<br>
<p>where Manuel actually goes through the motions.  If you think you have fixes
<br>
for this 'simple case of conflict', as you call, do not hold back and tell
<br>
us, but please over on that list.
<br>
<p>Thank you,  Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Previous message:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>In reply to:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
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
