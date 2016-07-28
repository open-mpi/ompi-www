<?
$subject_val = "Re: [OMPI users] Mixing the FORTRAN and C APIs.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 17:01:58 2011" -->
<!-- isoreceived="20110507210158" -->
<!-- sent="Sat, 7 May 2011 17:01:52 -0400" -->
<!-- isosent="20110507210152" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing the FORTRAN and C APIs." -->
<!-- id="C3459913-DFB8-475A-8478-FC22DF2C0BA3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BLU0-SMTP118EB4823E7ADE742D86D91B7830_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing the FORTRAN and C APIs.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 17:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16480.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16481.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16481.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Tim Prince said:
<br>
<p>1. you can mix C and Fortran MPI function calls in a single program
<br>
<p>2. as such, there's no reason for your C++ app to call mpi_init__() (for example)
<br>
<p>3. you should be able to call *all* MPI C functions as you normally would
<br>
<p>4. the only things that you should need MPI_&lt;foo&gt;_f2c / MPI_&lt;foo&gt;_c2f for are when you exchange MPI handles between your app and PARPACK.  For example, if you have to pass an MPI datatype down to PARPACK, you'd actually need to pass MPI_Type_f2c(MPI_INTEGER), or MPI_Type_f2c(MPI_DOUBLE_PRECISION).
<br>
<p>5. yes, it might be a pain to figure out how to link your C++ app with a fortran library, but I think you need to figure that out.  You *may* actually end up linking your final executable with the Fortran compiler/linker, not the C++ compiler/linker.  But you may need to specify some extra support libraries regardless of which linker you end up using -- you might need to google around and see if other people have tried linking C++ and Fortran together with your compiler suite.
<br>
<p>Make sense?
<br>
<p><p><p>On May 6, 2011, at 1:50 PM, Tim Prince wrote:
<br>
<p><span class="quotelev1">&gt; On 5/6/2011 10:22 AM, Tim Hutt wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 6 May 2011 16:45, Tim Hutt&lt;tdhutt_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6 May 2011 16:27, Tim Prince&lt;tcprince_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you want to use the MPI Fortran library, don't convert your Fortran to C.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  It's difficult to understand why you would consider f2c a &quot;simplest way,&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but at least it should allow you to use ordinary C MPI function calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, maybe I wasn't clear. Just to clarify, all of *my* code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; written in C++ (because I don't actually know Fortran), but I want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use some function from PARPACK which is written in Fortran.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm I converted my C++ code to use the C OpenMPI interface instead,
</span><br>
<span class="quotelev2">&gt;&gt; and now I get link errors (undefined references). I remembered I've
</span><br>
<span class="quotelev2">&gt;&gt; been linking with -lmpi -lmpi_f77, so maybe I need to also link with
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_cxx or -lmpi++  ... what exactly do each of these libraries
</span><br>
<span class="quotelev2">&gt;&gt; contain?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also I have run into the problem that the communicators are of type
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI_Comm&quot; in C, and &quot;integer&quot; in Fortran... I am using MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; in each case so I assume that will end up referring to the same
</span><br>
<span class="quotelev2">&gt;&gt; thing... but maybe you really can't mix Fortran and C. Expert opinion
</span><br>
<span class="quotelev2">&gt;&gt; would be very very welcome!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; If you use your OpenMPI mpicc wrapper to compile and link, the MPI libraries should be taken care of.
</span><br>
<span class="quotelev1">&gt; Style usage in an f2c translation is debatable, but you have an #include &quot;f2c.h&quot; or &quot;g2c.h&quot; which translates the Fortran data types to legacy C equivalent.  By legacy I mean that in the f2c era, the inclusion of C data types in Fortran via USE iso_c_binding had not been envisioned.
</span><br>
<span class="quotelev1">&gt; One would think that you would use the MPI header data types on both the Fortran and the C side, even though you are using legacy interfaces.
</span><br>
<span class="quotelev1">&gt; Slip-ups in MPI data types often lead to run-time errors.  If you have an error-checking MPI library such as the Intel MPI one, you get a little better explanation at the failure point.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16480.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16481.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16481.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
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
