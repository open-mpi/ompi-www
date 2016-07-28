<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 02:45:21 2008" -->
<!-- isoreceived="20080513064521" -->
<!-- sent="Tue, 13 May 2008 14:58:21 +0800" -->
<!-- isosent="20080513065821" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="OF8C9415F0.26C11F2C-ON48257448.0024AB2A-48257448.00252EA4_at_cn.ibm.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="20080512143354.GV51303_at_sun.com" -->
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
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 02:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ethan, Thanks for your answer!
<br>

<br>
I run client/mtt with debug model, and found mtt script exited in following
<br>
code section of lib/MTT/Module.pm.
<br>

<br>
&nbsp;32     my $str = &quot;require $module&quot;;
<br>
&nbsp;33     Debug(&quot;Evaluating: $str\n&quot;);
<br>
&nbsp;34     my $check = eval $str;
<br>

<br>
When require error occured, $str was set to &quot;MTT::Test::Specify::Simple
<br>
Simple&quot;. This is not a valid Perl module, so mtt failed. I had no time to
<br>
probe why/where such value was got. I just modified Module.pm to work
<br>
around the issue.
<br>

<br>
[root_at_host MTT]# !diff
<br>
diff primary/Module.pm ./lib/MTT/Module.pm
<br>
31a32,38
<br>
<span class="quotelev1">&gt; if ($module =~ m/Simple/)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;       if (length($module) &gt; 26)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;               ($module) = $module =~ m/(.*::Simple)/;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; }
</span><br>

<br>
With this workaround, $str was changed back to &quot;MTT::Test::Specify::Simple
<br>
&quot;, and mtt script could continue. Ater all the tests finished, I found some
<br>
MTT cases failed. For those failed cases, who will probe it? Or how can I
<br>
probe them? Here list one section that returned error.
<br>

<br>
| command                  | mpirun     -np 2 --mca btl tcp,self --prefix
<br>
/LTC/MTT/installs/Urs4/install       |
<br>
|                          | t_win
<br>
|
<br>
| duration                 | 0 seconds
<br>
|
<br>
| exit_value               | 1
<br>
|
<br>
| result_message           | Failed; exit status: 1
<br>
|
<br>
| result_stdout            |  WIN_BASIC: passed
<br>
|
<br>
|                          |  WIN_OVERLAP: passed
<br>
|
<br>
|                          |  WIN_OVERLAP2: passed
<br>
|
<br>
|                          |  WIN_OVERLAP3: passed
<br>
|
<br>
|                          |  LOCK_EPOCH: passed
<br>
|
<br>
|                          |  FENCE_EPOCH: failed
<br>
|
<br>
|                          |  MISC: passed
<br>
|
<br>
|                          |  POST_EPOCH: passed
<br>
|
<br>
|                          |  WIN_BASIC: passed
<br>
|
<br>
|                          |  WIN_OVERLAP: passed
<br>
|
<br>
|                          |  WIN_OVERLAP2: passed
<br>
|
<br>
|                          |  WIN_OVERLAP3: passed
<br>
|
<br>
|                          |  LOCK_EPOCH: passed
<br>
|
<br>
|                          |  FENCE_EPOCH: passed
<br>
|
<br>
|                          |  MISC: passed
<br>
|
<br>
|                          |  POST_EPOCH: passed
<br>
|
<br>
|                          | t_win: FAILED 1
<br>
|
<br>
| start_timestamp          | Tue May 13 04:54:59 2008
<br>
|
<br>
| test_name                | t_win
<br>
|
<br>
| variant                  | 2
<br>
|
<br>

<br>
Wen Hao Wang (&#205;&#245;&#206;&#196;&#234;&#187;)
<br>

<br>
Software Engineer
<br>
IBM China Software Development Laboratory
<br>
Email: wangwhao_at_[hidden]
<br>
Tel: 86-10-82451055
<br>
Fax: 86-10-82782244 ext. 2312
<br>
Address: 5/F, Deshi Building, No.9 East Road Shangdi, Haidian District,
<br>
Beijing, 100085, P.R.China
<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ethan Mallove                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ethan.mallove_at_su                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n.com&gt;                                                     To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                  General user list for the MPI       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users-bounces         Testing Tool                        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@open-mpi.org             &lt;mtt-users_at_[hidden]&gt;            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brad Benton                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008-05-12 22:33          &lt;brad.benton_at_[hidden]&gt;            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [MTT users] MTT fail to require 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to         MTT::Test::Specify::Simple          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General user list                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for the MPI                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Testing Tool                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;mtt-users_at_open-m                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pi.org&gt;                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br>

<br>

<br>

<br>
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

<br>
&nbsp;&nbsp;$ chmod -R a+r ./lib
<br>

<br>
FWIW, I was able to get a simple &quot;require&quot; to fail by
<br>
tweaking read permissions:
<br>

<br>
&nbsp;&nbsp;$ echo &quot;package Foo; 1;&quot; &gt; Foo.pm
<br>
&nbsp;&nbsp;$ perl -e 'require Foo;'
<br>
&nbsp;&nbsp;$ ls -l Foo.pm
<br>
&nbsp;&nbsp;-rw-r--r--    1 em162155 staff 16 May 12 10:29 Foo.pm
<br>

<br>
Remove read permissions:
<br>

<br>
&nbsp;&nbsp;$ chmod a-r Foo.pm
<br>
&nbsp;&nbsp;Can't locate Foo.pm in @INC (@INC contains:
<br>
/ws/ompi-tools/lib/perl5/5.8.8 /usr/perl5/5.8.4/lib/sun4-solaris-64int
<br>
/usr/perl5/5.8.4/lib /usr/perl5/site_perl/5.8.4/sun4-solaris-64int
<br>
/usr/perl5/site_perl/5.8.4 /usr/perl5/site_perl
<br>
/usr/perl5/vendor_perl/5.8.4/sun4-solaris-64int
<br>
/usr/perl5/vendor_perl/5.8.4 /usr/perl5/vendor_perl .) at -e line 1.
<br>
&nbsp;&nbsp;BEGIN failed--compilation aborted at -e line 1.
<br>

<br>
-Ethan
<br>

<br>
On Sun, May/11/2008 02:57:15PM, Wen Hao Wang wrote:
<br>
<span class="quotelev1">&gt;    Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I run MTT on RHEL5.2 Server of x86_32 arch. Only four lines were
</span><br>
changed
<br>
<span class="quotelev1">&gt;    in the samples/ompi-core-template.ini:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         #mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
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
<span class="quotelev1">&gt;    MTT::Test::Specify::Simple. Does anyone have comments? Thanks in
</span><br>
advance!
<br>
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
<span class="quotelev1">&gt;    Evaluating: # We can exit if the test passed or was skipped (i.e.,
</span><br>
there's
<br>
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
<span class="quotelev1">&gt;    btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;) --prefix &amp;test_prefix()
</span><br>
&amp;test_executable()
<br>
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
<span class="quotelev1">&gt;    . <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>

<br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>

<br>
_______________________________________________
<br>
mtt-users mailing list
<br>
mtt-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
<p>
<p><p>


<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0545/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0545/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0545/pic03293.gif" alt="pic03293.gif">
<!-- attachment="pic03293.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0545/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
