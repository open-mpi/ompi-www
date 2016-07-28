<?
$subject_val = "[OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 11 07:31:29 2013" -->
<!-- isoreceived="20130711113129" -->
<!-- sent="Thu, 11 Jul 2013 13:31:24 +0200" -->
<!-- isosent="20130711113124" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="[OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail" -->
<!-- id="CAHYyVz7=2=k=YCsrDWKwQxtJmRssu5Ouad0BWDHnn=YM5Pbc6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-11 07:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
upon inspecting:
<br>
$ /usr/share/automake-1.14/test-driver --help
<br>
Usage:
<br>
&nbsp;&nbsp;test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[--expect-failure={yes|no}] [--color-tests={yes|no}]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
<br>
The '--test-name', '--log-file' and '--trs-file' options are mandatory.
<br>
&lt;code&gt;
<br>
make  check-TESTS
<br>
make[1]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
&nbsp;...
<br>
<p>/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/test-driver:
<br>
line 95:  &lt;PID&gt; Segmentation fault      (core dumped) &quot;$@&quot; &gt; $log_file
<br>
2&gt;&amp;1
<br>
&lt;/code&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
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
