<?
$subject_val = "[MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 11 02:44:21 2008" -->
<!-- isoreceived="20080511064421" -->
<!-- sent="Sun, 11 May 2008 14:57:15 +0800" -->
<!-- isosent="20080511065715" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="[MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="OFE83A5A96.196AF4CA-ON48257445.00068DF0-48257446.002514E4_at_cn.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT users] MTT fail to require MTT::Test::Specify::Simple<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-11 02:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Jeff Squyres: "Re: [MTT users] Open MPI Subversion repositories access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I run MTT on RHEL5.2 Server of x86_32 arch. Only four lines were changed in
<br>
the samples/ompi-core-template.ini:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mttdatabase_username = &lt;my_user&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mttdatabase_password = &lt;my_password&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mttdatabase_platform = &lt;my_platform&gt;
<br>
<p>The script run for about one hour and aborted, saying error to require
<br>
MTT::Test::Specify::Simple. Does anyone have comments? Thanks in advance!
<br>
Moreover, does MTT has log for its execution?
<br>
<p>[root_at_valiant MTT]# client/mtt --trial -d --force -f
<br>
samples/ompi-core-template.ini
<br>
...
<br>
<span class="quotelev2">&gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.7a0r18267] / [gcc warnings]
</span><br>
Found MPI details: [mpi details: open mpi]
<br>
Using [mpi details: open mpi] with [MPI Install: gcc warnings]
<br>
Evaluating: # We can exit if the test passed or was skipped (i.e., there's
<br>
&nbsp;&nbsp;&nbsp;no need
<br>
&nbsp;&nbsp;&nbsp;# to cleanup).
<br>
&nbsp;&nbsp;&nbsp;if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
<br>
&nbsp;&nbsp;&nbsp;&quot;skipped&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 0
<br>
&nbsp;&nbsp;&nbsp;fi
<br>
<p>&nbsp;&nbsp;&nbsp;if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
<br>
&nbsp;&nbsp;&nbsp;elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--host $MTT_TEST_HOSTLIST&quot;
<br>
&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
<br>
&nbsp;&nbsp;&nbsp;mtt_ompi_cleanup.pl
<br>
Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
<br>
&nbsp;&nbsp;&nbsp;&quot;&amp;hostfile()&quot;)&quot;,             &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;,
<br>
&nbsp;&nbsp;&nbsp;&quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() &amp;enumerate(         &quot;--mca btl
<br>
&nbsp;&nbsp;&nbsp;sm,tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;),       &quot;
<br>
&nbsp;&nbsp;&nbsp;--mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
<br>
&nbsp;&nbsp;&nbsp;btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;,         &quot;--mca btl
<br>
&nbsp;&nbsp;&nbsp;tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;),   &quot; --mca
<br>
&nbsp;&nbsp;&nbsp;btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
<br>
&nbsp;&nbsp;&nbsp;btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;) --prefix &amp;test_prefix() &amp;test_executable()
<br>
&nbsp;&nbsp;&nbsp;&amp;test_argv()
<br>
chdir /LTC/MTT/installs/AYrM/tests/onesided/onesided
<br>
Evaluating: require MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;Simple
<br>
*** ERROR: Module aborted during require: MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Simple: syntax error at (eval 45608) line 4, near &quot;require
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;
<br>
[root_at_valiant MTT]# echo $?
<br>
25
<br>
[root_at_valiant MTT]# find . -name Simple.pm
<br>
./lib/MTT/Test/Specify/Simple.pm
<br>
<p><p>Wen Hao Wang
<br>
Email: wangwhao_at_[hidden]
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0542/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Jeff Squyres: "Re: [MTT users] Open MPI Subversion repositories access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
