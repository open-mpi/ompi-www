<?
$subject_val = "[OMPI users] Bug in POWERPC32.asm?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 13:08:24 2010" -->
<!-- isoreceived="20100806170824" -->
<!-- sent="Fri, 6 Aug 2010 13:08:17 -0400" -->
<!-- isosent="20100806170817" -->
<!-- name="Matthew Clark" -->
<!-- email="linux.matthew_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in POWERPC32.asm?" -->
<!-- id="AANLkTinGaPtDGoO=tab+6r-+cJXbhFwjhoocniMAowE7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Bug in POWERPC32.asm?<br>
<strong>From:</strong> Matthew Clark (<em>linux.matthew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-06 13:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>Reply:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was looking in my copy of openmpi-1.4.1 opal/asm/base/POWERPC32.asm
<br>
and saw the following:
<br>
<p>START_FUNC(opal_sys_timer_get_cycles)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LSYM(15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mftbu r0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mftb r11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mftbu r2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmpw cr7,r2,r0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bne+ cr7,REFLSYM(14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;li r4,0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;li r9,0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or r3,r2,r9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or r4,r4,r11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blr
<br>
END_FUNC(opal_sys_timer_get_cycles)
<br>
<p>I'll readily admit at my lack of ppc assembly smartness, but shouldn't
<br>
the loop back at bne+ be to REFLSYM(15) instead of (14)?
<br>
<p>Matt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>Reply:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
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
