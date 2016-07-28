<?
$subject_val = "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 13:19:49 2009" -->
<!-- isoreceived="20090130181949" -->
<!-- sent="Fri, 30 Jan 2009 13:19:45 -0500 (EST)" -->
<!-- isosent="20090130181945" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers" -->
<!-- id="alpine.DEB.1.10.0901301318440.3885_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4981C706.8060707_at_bu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 13:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
<li><strong>Previous message:</strong> <a href="7898.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7907.php">Wayne Gilmore: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 29 Jan 2009, Wayne Gilmore wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to use the compiler_args field in the wrappers script to deal
</span><br>
<span class="quotelev1">&gt; with 32 bit compiles on our cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using portland group compilers and use the following for 32 bit
</span><br>
<span class="quotelev1">&gt; builds:  -tp p7 (I actually tried to use -tp x32 but it does not compile
</span><br>
<span class="quotelev1">&gt; correctly.  I think it has something to do with how the atomic operations are 
</span><br>
<span class="quotelev1">&gt; defined)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've created a separate stanza in the wrapper but I am not able to use
</span><br>
<span class="quotelev1">&gt; the whole option &quot;-tp p7&quot; for the compiler_args.  It only works if I do
</span><br>
<span class="quotelev1">&gt; compiler_args=p7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to provide compiler_args with arguments that contain a space?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would eliminate cases where 'p7' would appear elsewhere in the compile 
</span><br>
<span class="quotelev1">&gt; line and be falsely recognized as a 32 bit build.
</span><br>
<p>You should be able to include options just as you want them to appear on 
<br>
the command line.  Can you send me both the .txt file you edited as well 
<br>
as the output of mpicc -showme (or whichever compiler you are testing)?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
<li><strong>Previous message:</strong> <a href="7898.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7907.php">Wayne Gilmore: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
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
