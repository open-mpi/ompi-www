<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  3 07:51:34 2006" -->
<!-- isoreceived="20060803115134" -->
<!-- sent="Thu, 03 Aug 2006 07:51:18 -0400" -->
<!-- isosent="20060803115118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in running openmpi on remote node" -->
<!-- id="C0F75B76.15B75%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c5e12fe60607240047l6d38af62gb429ffa85586f245_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-03 07:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1715.php">Gunnar Johansson: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Previous message:</strong> <a href="1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/24/06 3:47 AM, &quot;Chengwen Chen&quot; &lt;chenchengwen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have tried to use v1.1 openmpi. but the program (AMBER9) I am using can't
</span><br>
<span class="quotelev1">&gt; be compiled correctly by v1.1. So I seems that I have to keep using
</span><br>
<span class="quotelev1">&gt; openmpi-1.02.
</span><br>
<p>Can you explain what you mean by that?  The user interface (i.e., the MPI
<br>
API) should not have changed between v1.0.2 and v1.1 -- can you show what
<br>
happened when you tried to compile your application with 1.1?
<br>
<p><span class="quotelev1">&gt; I am new in linux, I really have no idea about debugger. Would you please
</span><br>
<span class="quotelev1">&gt; give me some advice to try in a simple way?
</span><br>
<p>I still have not filled up the OMPI FAQ with information on how to use
<br>
valgrind, but the information on the LAM/MPI FAQ is pretty relevant (note
<br>
that OMPI does not have a --with-purify option, so disregard that):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.lam-mpi.org/faq/">http://www.lam-mpi.org/faq/</a>
<br>
<p>See the &quot;Debugging programs under LAM/MPI&quot; section.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1715.php">Gunnar Johansson: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Previous message:</strong> <a href="1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
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
