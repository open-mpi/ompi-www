<?
$subject_val = "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 20 09:49:20 2013" -->
<!-- isoreceived="20131120144920" -->
<!-- sent="Wed, 20 Nov 2013 14:49:16 +0000" -->
<!-- isosent="20131120144916" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris" -->
<!-- id="527F3E9F-517F-4523-A3B1-F9A71DE87D3A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201311200628.rAK6S5Ch002447_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-20 09:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23009.php">Venkat Reddy: "[OMPI users] Request for help/suggestion"</a>
<li><strong>Previous message:</strong> <a href="23007.php">Siegmar Gross: "[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="23007.php">Siegmar Gross: "[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>Can you compile with debugging on, and run ompi_info in a debugger?  This will give us a source code filename and line number where the bus error is occurring.
<br>
<p>Thanks.
<br>
<p><p>On Nov 19, 2013, at 11:28 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.9a1r29719 on Solaris 10 Sparc with
</span><br>
<span class="quotelev1">&gt; Sun C 5.12. I get a bus error when I run ompi_info with option &quot;-a&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 106 ompi_info | grep MPI:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9a1r29719
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 107 ompi_info -a | grep MPI:
</span><br>
<span class="quotelev1">&gt; [tyr:02431] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:02431] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:02431] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:02431] Failing at address: ffffffff7d3c5ac1
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_back
</span><br>
<span class="quotelev1">&gt; trace_print+0x14
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x17f268
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8c28
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc79c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc9a8
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x134b9c 
</span><br>
<span class="quotelev1">&gt; [ Signal 2099923552 (?)]
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:mca_base_
</span><br>
<span class="quotelev1">&gt; var_dump+0x1b0
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x89828
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_info
</span><br>
<span class="quotelev1">&gt; _show_mca_params+0xb4
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_info
</span><br>
<span class="quotelev1">&gt; _do_params+0x364
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/ompi_info:main+0x628
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/ompi_info:_start+0x12c
</span><br>
<span class="quotelev1">&gt; [tyr:02431] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Bus error 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 108 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can solve the problem. Thank you very
</span><br>
<span class="quotelev1">&gt; much in advance for any help. Please let me know if I can provide any
</span><br>
<span class="quotelev1">&gt; additional information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23009.php">Venkat Reddy: "[OMPI users] Request for help/suggestion"</a>
<li><strong>Previous message:</strong> <a href="23007.php">Siegmar Gross: "[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="23007.php">Siegmar Gross: "[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
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
