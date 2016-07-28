<?
$subject_val = "Re: [OMPI users] Bug in POWERPC32.asm?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 06:11:51 2010" -->
<!-- isoreceived="20100809101151" -->
<!-- sent="Mon, 9 Aug 2010 15:41:45 +0530" -->
<!-- isosent="20100809101145" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in POWERPC32.asm?" -->
<!-- id="AANLkTimaFLnqa51NrsT7WpjQXC02f3M9eoqV3MZjKojC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinGaPtDGoO=tab+6r-+cJXbhFwjhoocniMAowE7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in POWERPC32.asm?<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 06:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13935.php">Edgar Gabriel: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<li><strong>In reply to:</strong> <a href="13919.php">Matthew Clark: "[OMPI users] Bug in POWERPC32.asm?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting this Matthew. Fixed in r23576 (
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/23576">https://svn.open-mpi.org/trac/ompi/changeset/23576</a>)
<br>
<p>Regards
<br>
--Nysal
<br>
<p>On Fri, Aug 6, 2010 at 10:38 PM, Matthew Clark &lt;linux.matthew_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I was looking in my copy of openmpi-1.4.1 opal/asm/base/POWERPC32.asm
</span><br>
<span class="quotelev1">&gt; and saw the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; START_FUNC(opal_sys_timer_get_cycles)
</span><br>
<span class="quotelev1">&gt;        LSYM(15)
</span><br>
<span class="quotelev1">&gt;        mftbu r0
</span><br>
<span class="quotelev1">&gt;        mftb r11
</span><br>
<span class="quotelev1">&gt;        mftbu r2
</span><br>
<span class="quotelev1">&gt;        cmpw cr7,r2,r0
</span><br>
<span class="quotelev1">&gt;        bne+ cr7,REFLSYM(14)
</span><br>
<span class="quotelev1">&gt;        li r4,0
</span><br>
<span class="quotelev1">&gt;        li r9,0
</span><br>
<span class="quotelev1">&gt;        or r3,r2,r9
</span><br>
<span class="quotelev1">&gt;        or r4,r4,r11
</span><br>
<span class="quotelev1">&gt;        blr
</span><br>
<span class="quotelev1">&gt; END_FUNC(opal_sys_timer_get_cycles)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll readily admit at my lack of ppc assembly smartness, but shouldn't
</span><br>
<span class="quotelev1">&gt; the loop back at bne+ be to REFLSYM(15) instead of (14)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13935.php">Edgar Gabriel: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<li><strong>In reply to:</strong> <a href="13919.php">Matthew Clark: "[OMPI users] Bug in POWERPC32.asm?"</a>
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
