<?
$subject_val = "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 20:01:08 2013" -->
<!-- isoreceived="20130821000108" -->
<!-- sent="Tue, 20 Aug 2013 17:01:07 -0700" -->
<!-- isosent="20130821000107" -->
<!-- name="Richard Haney" -->
<!-- email="rfhaney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make" -->
<!-- id="CACpvy6BKNiD-qXuLc-+Gf-f2DObADJJDde-B-nwCPfu6DDPWnQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F826701_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make<br>
<strong>From:</strong> Richard Haney (<em>rfhaney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 20:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22530.php">Javier Garcia Blas: "[OMPI users] Call For Participation: EuroMPI 2013. Madrid, Spain. September	15-18th"</a>
<li><strong>Previous message:</strong> <a href="22528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>In reply to:</strong> <a href="22528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah!  Thanks, Jeff.  Here is a link to the relevant zip file &quot;
<br>
openmpi-1.6.5_configure_and_make.zip&lt;<a href="https://docs.google.com/file/d/0B53THZfOZ1qmY1VtaU5obUtUSDQ/edit?usp=sharing">https://docs.google.com/file/d/0B53THZfOZ1qmY1VtaU5obUtUSDQ/edit?usp=sharing</a>&gt;&quot;.
<br>
&nbsp;It contains the modified configure (essentially replacing the compound
<br>
&quot;if&quot; statement that assigns
<br>
ompi_cv_asm_arch=&quot;IA32&quot;
<br>
because my &quot;long&quot; is size 4); the replacement is the simply the alternative
<br>
assignment that configure would chose if my &quot;long&quot; size were not 4:
<br>
ompi_cv_asm_arch=&quot;AMD64&quot;
<br>
<p>The zip file contains:
<br>
configure_modified
<br>
config.log openmpi-1.6.5_configure.out   (the output of configure executed
<br>
from within another script)
<br>
make_-j_2.out   (the output from the parallel attempt at make), and
<br>
make.out--(nonparallel make).out
<br>
<p>The make command still does not get past the building of of asm.c in
<br>
/openmpi-1.6.5/opal/asm
<br>
<p>I ran the nonparallel make to eliminate any confusion over the parallel
<br>
creation of object file atomic-asm.o in subdirectory .libs by command
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
at the same time that the command
<br>
&nbsp;&nbsp;CC     asm.lo
<br>
was about to &quot;crash&quot; with lots of warnings and with seemingly uninformative
<br>
&quot;Error&quot; messages.
<br>
<p><p>On Tue, Aug 20, 2013 at 2:20 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Google drive?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22530.php">Javier Garcia Blas: "[OMPI users] Call For Participation: EuroMPI 2013. Madrid, Spain. September	15-18th"</a>
<li><strong>Previous message:</strong> <a href="22528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>In reply to:</strong> <a href="22528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
