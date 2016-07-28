<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 10:34:03 2008" -->
<!-- isoreceived="20080512143403" -->
<!-- sent="Mon, 12 May 2008 10:33:54 -0400" -->
<!-- isosent="20080512143354" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="20080512143354.GV51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFE83A5A96.196AF4CA-ON48257445.00068DF0-48257446.002514E4_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 10:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0542.php">Wen Hao Wang: "[MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is odd that a &quot;require&quot; failed like this in the Test Run
<br>
phase. I would have expected an earlier &quot;require&quot; to fail
<br>
(e.g., in the MPI Install phase). I've never run MTT as root
<br>
before. Does root have read-access to Specify/Simple.pm? If
<br>
not, can you do the below command in the top-level MTT
<br>
directory?
<br>
<p>&nbsp;&nbsp;$ chmod -R a+r ./lib
<br>
<p>FWIW, I was able to get a simple &quot;require&quot; to fail by
<br>
tweaking read permissions:
<br>
<p>&nbsp;&nbsp;$ echo &quot;package Foo; 1;&quot; &gt; Foo.pm
<br>
&nbsp;&nbsp;$ perl -e 'require Foo;'
<br>
&nbsp;&nbsp;$ ls -l Foo.pm
<br>
&nbsp;&nbsp;-rw-r--r--    1 em162155 staff 16 May 12 10:29 Foo.pm
<br>
<p>Remove read permissions:
<br>
<p>&nbsp;&nbsp;$ chmod a-r Foo.pm
<br>
&nbsp;&nbsp;Can't locate Foo.pm in @INC (@INC contains: /ws/ompi-tools/lib/perl5/5.8.8 /usr/perl5/5.8.4/lib/sun4-solaris-64int /usr/perl5/5.8.4/lib /usr/perl5/site_perl/5.8.4/sun4-solaris-64int /usr/perl5/site_perl/5.8.4 /usr/perl5/site_perl /usr/perl5/vendor_perl/5.8.4/sun4-solaris-64int /usr/perl5/vendor_perl/5.8.4 /usr/perl5/vendor_perl .) at -e line 1.
<br>
&nbsp;&nbsp;BEGIN failed--compilation aborted at -e line 1.
<br>
<p>-Ethan
<br>
<p>On Sun, May/11/2008 02:57:15PM, Wen Hao Wang wrote:
<br>
<span class="quotelev1">&gt;    Hi all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I run MTT on RHEL5.2 Server of x86_32 arch. Only four lines were changed
</span><br>
<span class="quotelev1">&gt;    in the samples/ompi-core-template.ini:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         #mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt;         mttdatabase_username = &lt;my_user&gt;
</span><br>
<span class="quotelev1">&gt;         mttdatabase_password = &lt;my_password&gt;
</span><br>
<span class="quotelev1">&gt;         mttdatabase_platform = &lt;my_platform&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The script run for about one hour and aborted, saying error to require
</span><br>
<span class="quotelev1">&gt;    MTT::Test::Specify::Simple. Does anyone have comments? Thanks in advance!
</span><br>
<span class="quotelev1">&gt;    Moreover, does MTT has log for its execution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [root_at_valiant MTT]# client/mtt --trial -d --force -f
</span><br>
<span class="quotelev1">&gt;    samples/ompi-core-template.ini
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.7a0r18267] / [gcc warnings]
</span><br>
<span class="quotelev1">&gt;    Found MPI details: [mpi details: open mpi]
</span><br>
<span class="quotelev1">&gt;    Using [mpi details: open mpi] with [MPI Install: gcc warnings]
</span><br>
<span class="quotelev1">&gt;    Evaluating: # We can exit if the test passed or was skipped (i.e., there's
</span><br>
<span class="quotelev1">&gt;    no need
</span><br>
<span class="quotelev1">&gt;    # to cleanup).
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
</span><br>
<span class="quotelev1">&gt;    &quot;skipped&quot;; then
</span><br>
<span class="quotelev1">&gt;    exit 0
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;    args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt;    elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;    args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev1">&gt;    mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt;    Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostfile()&quot;)&quot;, &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() &amp;enumerate( &quot;--mca btl
</span><br>
<span class="quotelev1">&gt;    sm,tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), &quot;
</span><br>
<span class="quotelev1">&gt;    --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt;    btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;, &quot;--mca btl
</span><br>
<span class="quotelev1">&gt;    tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), &quot; --mca
</span><br>
<span class="quotelev1">&gt;    btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt;    btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;) --prefix &amp;test_prefix() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt;    &amp;test_argv()
</span><br>
<span class="quotelev1">&gt;    chdir /LTC/MTT/installs/AYrM/tests/onesided/onesided
</span><br>
<span class="quotelev1">&gt;    Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;    Simple
</span><br>
<span class="quotelev1">&gt;    *** ERROR: Module aborted during require: MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;    Simple: syntax error at (eval 45608) line 4, near &quot;require
</span><br>
<span class="quotelev1">&gt;    MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;    Simple
</span><br>
<span class="quotelev1">&gt;    &quot;
</span><br>
<span class="quotelev1">&gt;    [root_at_valiant MTT]# echo $?
</span><br>
<span class="quotelev1">&gt;    25
</span><br>
<span class="quotelev1">&gt;    [root_at_valiant MTT]# find . -name Simple.pm
</span><br>
<span class="quotelev1">&gt;    ./lib/MTT/Test/Specify/Simple.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Wen Hao Wang
</span><br>
<span class="quotelev1">&gt;    Email: wangwhao_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0542.php">Wen Hao Wang: "[MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
