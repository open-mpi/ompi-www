<?
$subject_val = "Re: [OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 14:46:08 2011" -->
<!-- isoreceived="20110507184608" -->
<!-- sent="Sat, 7 May 2011 14:46:03 -0400" -->
<!-- isosent="20110507184603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] USE mpi" -->
<!-- id="35EEE2B6-0DE1-49D8-B317-2582D7D8424C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1304793638.2633.12.camel_at_sjb-linux" -->
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
<strong>Subject:</strong> Re: [OMPI users] USE mpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 14:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16477.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16475.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16475.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16477.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16477.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the output of 
<br>
<p>/usr/bin/mpif90  -vec-report0 -O3 -r8 -assume byterecl $FILENAME -c --showme
<br>
<p>And
<br>
<p>ompi_info | grep 90
<br>
<p><p><p>On May 7, 2011, at 2:40 PM, Steph Bredenhann wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the quick feedback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My compile line is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpif90  -vec-report0 -O3 -r8 -assume byterecl $FILENAME -c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built OMPI with IFORT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Steph Bredenhann 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, 2011-05-07 at 14:26 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What is the compile line that you are using to compile your application?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you use &quot;mpif90 ...&quot;, then the right compiler directive should be automatically added such that the mpi module will be found (assuming that your OMPI was installed with F90 support, that is).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 7, 2011, at 2:09 PM, Steph Bredenhann wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have compiled all my fortran source files successfully with openmpi 1.4.3 wrapper for ifort on Ubuntu 10.10, except the main progran file that contains the &quot;include mpif.h&quot; statement. It seems that the &quot;include mpif.h&quot; is deprecated and that one should now use &quot;USE mpi&quot;. However, when compiling with this I get the following message:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Compile...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3k-1.for(2): error #7002: Error in opening the compiled module file.  Check INCLUDE paths.   [MPI]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       USE mpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ----------^
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compilation aborted for 3k-1.for (code 1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; done
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;/usr/include/mpi&quot; is included in the variable $INCLUDE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Could someone please advise on the next step to take?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Steph Bredenhann 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="16477.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16475.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16475.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16477.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16477.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
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
