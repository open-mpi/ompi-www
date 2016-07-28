<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 23:17:52 2007" -->
<!-- isoreceived="20070606031752" -->
<!-- sent="Tue, 5 Jun 2007 20:17:45 -0700" -->
<!-- isosent="20070606031745" -->
<!-- name="Lie-Quan Lee" -->
<!-- email="liequan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="7E66E0AC-E129-44DB-9B3B-19B653766C40_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72C4EA03-C295-4A0C-9565-1D8E3A6D39FA_at_cisco.com" -->
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
<strong>From:</strong> Lie-Quan Lee (<em>liequan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 23:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3380.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3380.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2007, at 6:46 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 5, 2007, at 4:51 PM, Lie-Quan Lee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using the OPEN_MPI #define is probably the safest bet to identify the
</span><br>
<span class="quotelev2">&gt;&gt; MPI as Open MPI, which then opens the door to using mpi&lt;compiler&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; showme to find the proper linker flags.  I would *NOT* recommend  
</span><br>
<span class="quotelev2">&gt;&gt; hard-
</span><br>
<span class="quotelev2">&gt;&gt; coding specific flags just because you know that you're linking
</span><br>
<span class="quotelev2">&gt;&gt; against Open MPI (because we can/have changed the flags behind the
</span><br>
<span class="quotelev2">&gt;&gt; scenes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think one of the possible solutions would be, in the next MPI
</span><br>
<span class="quotelev2">&gt;&gt; standard (will it come very soon?, or not?),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to hope that MPI 2.1 comes out someday in the not-
</span><br>
<span class="quotelev1">&gt; distant future, but I'm guessing that it'll take quite a while.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; specify the library (libraries) for mixed language linking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI has traditionally shied away from specifying this kind of thing,
</span><br>
<span class="quotelev1">&gt; instead leaving it to be an implementation-specific detail.
</span><br>
<p>it is a quite of headache for each compiler/platform to deal with  
<br>
mixed language
<br>
issues.  I have to compile my application on IBM visual age compiler,  
<br>
Pathscale, Cray X1E compiler,
<br>
intel/openmpi, intel/mpich, PGI compiler ...
<br>
And of course, openmpi 1.1 is different on this comparing with  
<br>
openmpi 1.2.2 (-lmpi_f77 is new to 1.2.2 version). :-)
<br>
<p>You are right. MPI forum most like will not take care of this. I just  
<br>
made a wish ... :-)
<br>
<p><p><span class="quotelev1">&gt; What, exactly, do you need to do?  Do you need to link an application
</span><br>
<p><span class="quotelev1">&gt; that uses all 4 of the MPI language bindings?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Anthony Chan's macro works fine to identify the openmpi (Thanks a  
<br>
lot!). After that I use mpif90 -showme:link to find out the flags and  
<br>
put them into LDFLAGS in my application. -- That is all I needed.    
<br>
Thanks.
<br>
<p>best,
<br>
Rich Lee
<br>
Stanford Linear Accelerator Center
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3380.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3380.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
