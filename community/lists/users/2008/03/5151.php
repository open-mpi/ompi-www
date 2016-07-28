<?
$subject_val = "Re: [OMPI users] ScaLapack and BLACS on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 18:26:02 2008" -->
<!-- isoreceived="20080306232602" -->
<!-- sent="Thu, 6 Mar 2008 18:25:55 -0500" -->
<!-- isosent="20080306232555" -->
<!-- name="Gregory John Orris" -->
<!-- email="gregory.orris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLapack and BLACS on Leopard" -->
<!-- id="FBE82D4F-2D52-4B0D-BDFE-526FD5AF9A78_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37917B5F-19A6-4344-A0F5-BB15C11C4C9E_at_ieee.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ScaLapack and BLACS on Leopard<br>
<strong>From:</strong> Gregory John Orris (<em>gregory.orris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 18:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5155.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
I really didn't want to start a new thread discussing the virtues and  
<br>
vices of every compiler, since this is hardly my forte and the  
<br>
opportunity to offend someone is fairly high, whilst making myself  
<br>
look clownish....
<br>
What I should have said was that &quot;for my organization one cannot  
<br>
justify the cost of buying, for example Intel's compiler.&quot;
<br>
Aside from some political/economic/legal reasons for this being true,  
<br>
we have a lot of very specific code that has been optimized over the  
<br>
years by hand.  While there are clearly speed advantages for Intel's  
<br>
compilers for many many problems, in our view, for our problems and  
<br>
our &quot;in house&quot; software, the speedup has not been sufficient to  
<br>
warrant the cost of a compiler for several hundred to several thousand  
<br>
computers (yes there are that many developers). Besides, timing claims  
<br>
and speedups are also dependent  upon the version of gcc/gfortran one  
<br>
uses, and what memory allocation routine, etc, etc.... There have been  
<br>
significant improvements in gcc from 4.1 through 4.3 that have been  
<br>
well documented. And there have also been accusations that intel  
<br>
&quot;chooses&quot; problems to accentuate their claims of supremacy. But  
<br>
doesn't every vendor do this? I admit that given an infinite amount of  
<br>
money I would go with the Intel compiler for all of our development  
<br>
work. Since we are more of a &quot;proof or concept&quot; organization and ship  
<br>
out production runs to real centers (with intel compilers), even a  
<br>
factor of 2 (which is our typical experience) is not significant  
<br>
enough. If it were to become, as you state roughly 8 times faster, it  
<br>
might be a different story. As it is, only legacy code is using  
<br>
fortran and if one moves to C/C++ the differences we've seen have been  
<br>
miniscule.
<br>
<p>Bottom line, it works for my configuration right now and both me and  
<br>
the other users are happy.
<br>
<p>Thanks all, for help, advice, and a provocative discussion.
<br>
<p>Regards,
<br>
Greg
<br>
<p>On Mar 6, 2008, at 5:11 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2008, at 12:49 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Greg,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would disagree with your statement that the available fortran
</span><br>
<span class="quotelev2">&gt;&gt; options can't pass a cost-benefit analysis. I have found that for
</span><br>
<span class="quotelev2">&gt;&gt; scientific programming (e.g., Livermore Fortran Kernels and actual
</span><br>
<span class="quotelev2">&gt;&gt; PDE solvers) that code produced by the intel compiler runs 25 to 55%
</span><br>
<span class="quotelev2">&gt;&gt; faster than code from gfortran or g95. Looking at the cost of adding
</span><br>
<span class="quotelev2">&gt;&gt; processors with g95/gfortran to get the same throughput as with
</span><br>
<span class="quotelev2">&gt;&gt; ifort you recover the $549 compiler cost real quickly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've a big fan of g95, but actually I'm seeing even greater
</span><br>
<span class="quotelev1">&gt; differences in a small code I'm using for some lengthy calculations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 14 MB of data being read into memory and processed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel ifort  is 7.7x faster then Linux g95 on MacPro 3.0 GHz
</span><br>
<span class="quotelev1">&gt; Intel ifort  is 2.9x faster then Linux g95 on Dual Opteron 1.4 GHz
</span><br>
<span class="quotelev1">&gt; Intel ifort  is 1.8x faster then Linux g95 on SGI Altix 350 dual
</span><br>
<span class="quotelev1">&gt; Itanium2 1.4 GHz
</span><br>
<span class="quotelev1">&gt; OS X g95 is 2.7x faster then Linux g95 on a MacPro 2.66 GHz (same
</span><br>
<span class="quotelev1">&gt; hardware exactly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The complete data set is very large, 56 GB, but that is 42 individual
</span><br>
<span class="quotelev1">&gt; frequencies, where as the 14 MB is a single frequency, data averaged
</span><br>
<span class="quotelev1">&gt; over areas, so get a favor of the answer but not exactly the right
</span><br>
<span class="quotelev1">&gt; answer.  I played around with compiler options, specified the exact
</span><br>
<span class="quotelev1">&gt; processor type within the limits of gcc and I gained only factions of
</span><br>
<span class="quotelev1">&gt; a percent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A co-worker saw factor 2 differences between Intel's compiler and g95
</span><br>
<span class="quotelev1">&gt; with a very complicated code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="5150.php">Terry Frankcombe: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5155.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
