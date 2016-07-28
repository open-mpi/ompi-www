<?
$subject_val = "Re: [OMPI users] warning:regcache incompatible with malloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 17:20:18 2007" -->
<!-- isoreceived="20071126222018" -->
<!-- sent="Mon, 26 Nov 2007 17:20:11 -0500" -->
<!-- isosent="20071126222011" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5307141C60_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB0468A8-23A8-497C-8A1E-C99E609754E8_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] warning:regcache incompatible with malloc<br>
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-26 17:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3632.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4522.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="4522.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am getting the warnings after an upgrade to 
<br>
mx-1.2.4 and openmpi-1.2.4.
<br>
<p>Either using the env variable setting MX_RCACHE=2, or linking the
<br>
application with -lmyriexpress removes the warnings. 
<br>
<p>Is either one of them the preferred way of doing it?
<br>
<p>Thanks,
<br>
<p><pre>
--
Valmor
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On
&gt; Behalf Of Scott Atchley
&gt; Sent: Tuesday, July 10, 2007 3:31 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] warning:regcache incompatible with malloc
&gt; 
&gt; On Jul 10, 2007, at 3:24 PM, Tim Prins wrote:
&gt; 
&gt; &gt; On Tuesday 10 July 2007 03:11:45 pm Scott Atchley wrote:
&gt; &gt;&gt; On Jul 10, 2007, at 2:58 PM, Scott Atchley wrote:
&gt; &gt;&gt;&gt; Tim, starting with the recently released 1.2.1, it is the default.
&gt; &gt;&gt;
&gt; &gt;&gt; To clarify, MX_RCACHE=1 is the default.
&gt; &gt;
&gt; &gt; It would be good for the default to be something where there is no
&gt; &gt; warning
&gt; &gt; printed (i.e. 0 or 2). I see the warning on the current trunk.
&gt; &gt;
&gt; &gt; Tim
&gt; 
&gt; After further discussion in-house, the warning can be avoided if -
&gt; lmyriexpress is included when linking the app (i.e. if it is in mpicc
&gt; when linking).
&gt; 
&gt; Another clarification, the regache does work with several replacement
&gt; malloc libraries. If the user application overloads mmap(), munmap()
&gt; and sbrk(), then it may or may not work. In this case, the user
&gt; should use MX_RCACHE=0.
&gt; 
&gt; Scott
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3632.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4522.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="4522.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
