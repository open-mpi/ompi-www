<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 21:38:43 2007" -->
<!-- isoreceived="20070529013843" -->
<!-- sent="Mon, 28 May 2007 19:38:23 -0600" -->
<!-- isosent="20070529013823" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="F29FB47D-3EBD-432F-8913-47F22F2F8549_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070528225742.GA3635_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 21:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1596.php">Jack Howarth: "[OMPI devel] MacOS X v1.2.2 patch (corrected)"</a>
<li><strong>Previous message:</strong> <a href="1594.php">Jack Howarth: "[OMPI devel] MacOS X v1.2.2 patch"</a>
<li><strong>In reply to:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2007, at 4:57 PM, Jack Howarth wrote:
<br>
<p><span class="quotelev1">&gt;    I have been told that Paraview is one package that
</span><br>
<span class="quotelev1">&gt; exhibits this problem with undefined environ symbols.
</span><br>
<span class="quotelev1">&gt; This will occur in any package which creates its own
</span><br>
<span class="quotelev1">&gt; shared libraries that link in any openmpi shared library
</span><br>
<span class="quotelev1">&gt; that contains the undefined environ symbol. I think it
</span><br>
<span class="quotelev1">&gt; is unreasonably restrictive to force all the application
</span><br>
<span class="quotelev1">&gt; developers who use openmpi to avoid creating shared libs
</span><br>
<span class="quotelev1">&gt; that use openmpi shared libraries. Again from the
</span><br>
<span class="quotelev1">&gt; response on the Darwin mailing list this is expected
</span><br>
<span class="quotelev1">&gt; behavior on Darwin. I will send two patches shortly
</span><br>
<span class="quotelev1">&gt; that address this without needing to touch configure.
</span><br>
<p>Have you tried it?  I ask because I have.  I created a shared library  
<br>
that called MPI_COMM_SPAWN (to make sure that it called a function  
<br>
that needed environ).  Then created an application that called the  
<br>
function in that shared library.  Both the new shared library and the  
<br>
application were able to link without problems.
<br>
<p>Both the Fink page and the Apple list post indicate that there's a  
<br>
problem *creating* a shared library with undefined symbols.  There  
<br>
appears to be no evidence to date that there's a problem creating a  
<br>
shared library that itself does not have undefined symbols but links  
<br>
to an application that does.  Given that I was unable to make it  
<br>
fail, I question whether this is a problem.
<br>
<p>I'm hesitant to make this change because these types of things are  
<br>
hard to maintain.  SInce we don't have a test case that fails, it's  
<br>
impossible to properly test.  And since it's obscure and works in the  
<br>
common case, it's unlikely to be properly maintained over the long  
<br>
run.  If an example where this fails is presented, I'm happy to make  
<br>
the changes.  Until then, it just doesn't make sense.  I'm not trying  
<br>
to be unreasonable, but I don't want to add unmaintainable code  
<br>
without at least a direct example of failure.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1596.php">Jack Howarth: "[OMPI devel] MacOS X v1.2.2 patch (corrected)"</a>
<li><strong>Previous message:</strong> <a href="1594.php">Jack Howarth: "[OMPI devel] MacOS X v1.2.2 patch"</a>
<li><strong>In reply to:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
