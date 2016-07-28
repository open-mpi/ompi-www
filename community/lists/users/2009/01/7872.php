<?
$subject_val = "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 10:11:35 2009" -->
<!-- isoreceived="20090129151135" -->
<!-- sent="Thu, 29 Jan 2009 10:11:02 -0500" -->
<!-- isosent="20090129151102" -->
<!-- name="Wayne Gilmore" -->
<!-- email="waygil_at_[hidden]" -->
<!-- subject="[OMPI users] Using compiler_args in wrappers with Portland Group Compilers" -->
<!-- id="4981C706.8060707_at_bu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Using compiler_args in wrappers with Portland Group Compilers<br>
<strong>From:</strong> Wayne Gilmore (<em>waygil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 10:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7873.php">Kiril Dichev: "[OMPI users] Issue with PBS Pro"</a>
<li><strong>Previous message:</strong> <a href="7871.php">Gabriele Fatigati: "[OMPI users] Pinned memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7899.php">Brian W. Barrett: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>Reply:</strong> <a href="7899.php">Brian W. Barrett: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>Maybe reply:</strong> <a href="7907.php">Wayne Gilmore: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to use the compiler_args field in the wrappers script to deal
<br>
with 32 bit compiles on our cluster.
<br>
<p>I'm using portland group compilers and use the following for 32 bit
<br>
builds:  -tp p7 (I actually tried to use -tp x32 but it does not compile
<br>
correctly.  I think it has something to do with how the atomic 
<br>
operations are defined)
<br>
<p>I've created a separate stanza in the wrapper but I am not able to use
<br>
the whole option &quot;-tp p7&quot; for the compiler_args.  It only works if I do
<br>
compiler_args=p7
<br>
<p>Is there a way to provide compiler_args with arguments that contain a 
<br>
space?
<br>
<p>This would eliminate cases where 'p7' would appear elsewhere in the 
<br>
compile line and be falsely recognized as a 32 bit build.
<br>
<p>Thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7873.php">Kiril Dichev: "[OMPI users] Issue with PBS Pro"</a>
<li><strong>Previous message:</strong> <a href="7871.php">Gabriele Fatigati: "[OMPI users] Pinned memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7899.php">Brian W. Barrett: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>Reply:</strong> <a href="7899.php">Brian W. Barrett: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>Maybe reply:</strong> <a href="7907.php">Wayne Gilmore: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
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
