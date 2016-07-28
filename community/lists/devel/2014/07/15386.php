<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 23:53:46 2014" -->
<!-- isoreceived="20140731035346" -->
<!-- sent="Wed, 30 Jul 2014 20:53:44 -0700" -->
<!-- isosent="20140731035344" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA167668hgVd2oWX0e5mt=-4bKYT+sM7Jn6svN-xV5y0FZQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17NgP5RXKzx92+wQoxVjJo5ZWqMf-O1G3BsJFy+KXKEyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 23:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15385.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15389.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 30, 2014 at 6:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 6:15 PM, &lt;tmishima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange thing is that openmpi-1.8 with PGI14.7 works fine.
</span><br>
<span class="quotelev2">&gt;&gt; What's the difference with openmpi-1.8 and openmpi-1.8.2rc2?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now that I can reproduce the problem you have reported, I am building
</span><br>
<span class="quotelev1">&gt; 1.8.1 with PGI14.4.
</span><br>
<span class="quotelev1">&gt; Then I may be able to answer the question about what is different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I have a clear answer to *what* is different (below) and am next looking
<br>
into the why/how now.
<br>
It seems that 1.8.1 has included all dependencies into libmpi_usempif08
<br>
while 1.8.2rc2 does not.
<br>
My reflex is to blame libtool, but config/lt* are unchanged between the two
<br>
versions.
<br>
<p>I am rebuilding now with &quot;V=1&quot; passed to make so I can see how the libs
<br>
were built.
<br>
I'd appreciate guidance if Jeff or anybody else has suggestions as to an
<br>
alternative approach to investigate this.
<br>
When completed, I will be (more than) happy to turn over the verbose make
<br>
output for somebody else to examine.
<br>
<p>-Paul
<br>
<p>In 1.8.1:
<br>
$ nm openmpi-1.8.1-linux-x86_64-pgi-14.4/INST/lib/libmpi_usempif08.so |
<br>
grep ' mpi_f08_sizeof_'
<br>
000000000004a9a0 T mpi_f08_sizeof_
<br>
000000000004ad70 T mpi_f08_sizeof_mpi_sizeof_complex_a_16_
<br>
000000000004acf0 T mpi_f08_sizeof_mpi_sizeof_complex_a_8_
<br>
000000000004ad30 T mpi_f08_sizeof_mpi_sizeof_complex_s_16_
<br>
000000000004acb0 T mpi_f08_sizeof_mpi_sizeof_complex_s_8_
<br>
000000000004a9f0 T mpi_f08_sizeof_mpi_sizeof_integer_a_1_
<br>
000000000004aa70 T mpi_f08_sizeof_mpi_sizeof_integer_a_2_
<br>
000000000004aaf0 T mpi_f08_sizeof_mpi_sizeof_integer_a_4_
<br>
000000000004ab70 T mpi_f08_sizeof_mpi_sizeof_integer_a_8_
<br>
000000000004a9b0 T mpi_f08_sizeof_mpi_sizeof_integer_s_1_
<br>
000000000004aa30 T mpi_f08_sizeof_mpi_sizeof_integer_s_2_
<br>
000000000004aab0 T mpi_f08_sizeof_mpi_sizeof_integer_s_4_
<br>
000000000004ab30 T mpi_f08_sizeof_mpi_sizeof_integer_s_8_
<br>
000000000004abf0 T mpi_f08_sizeof_mpi_sizeof_real_a_4_
<br>
000000000004ac70 T mpi_f08_sizeof_mpi_sizeof_real_a_8_
<br>
000000000004abb0 T mpi_f08_sizeof_mpi_sizeof_real_s_4_
<br>
000000000004ac30 T mpi_f08_sizeof_mpi_sizeof_real_s_8_
<br>
<p>In 1.8.2rc2:
<br>
$ nm openmpi-1.8.2rc2-linux-x86_64-pgi-14.4/INST/lib/libmpi_usempif08.so |
<br>
grep ' mpi_f08_sizeof_'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_f08_sizeof_
<br>
<p><p>Similar differences exist corresponding to the other three modules that
<br>
give undefined references in Tetsuya's simple test code.
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15385.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15389.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
