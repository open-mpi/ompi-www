<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 01:43:21 2008" -->
<!-- isoreceived="20080515054321" -->
<!-- sent="Thu, 15 May 2008 13:56:14 +0800" -->
<!-- isosent="20080515055614" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="OF2A5952F3.B924FE3E-ON4825744A.001E983B-4825744A.001F7EF8_at_cn.ibm.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="D0367613-AC67-44AE-937F-45B6700D668B_at_cisco.com" -->
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
<strong>Date:</strong> 2008-05-15 01:56:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>In reply to:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0558.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0558.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff and Ethan:
<br>

<br>
Sorry for my delay. I deleted that line &quot;specify_module = Simple&quot; in ini
<br>
file, and the require failure diappeared. Thanks for your support.
<br>

<br>
Here is my MTT arguments this time:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;client/mtt -d --force -f samples/ompi-core-template.ini --trial
<br>
--no-section intel --no-section 1.1
<br>
The MTT result contains totally 22 failure. Not sure which of them are
<br>
already known issues. I suppose the failed cases are one open MPI issue,
<br>
instead of MTT issue. If that's the case, please correct me. I do not know
<br>
which bug in <a href="https://svn.open-mpi.org/trac/ompi/report/6">https://svn.open-mpi.org/trac/ompi/report/6</a> matches my mtt
<br>
failure in running &quot;mpirun -np 2 --mca btl tcp,self --prefix /LTC/MTT/...&quot;
<br>
listed below.
<br>

<br>
Is there any method to probe this failures for me? Or is there anyone to
<br>
check all my MTT failed cases? I need one method to get which failed cases
<br>
have been known and tracked.
<br>

<br>
Thanks again.
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsquyres_at_cisco.c                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;om&gt;                                                        To 
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008-05-13 20:26          &lt;brad.benton_at_[hidden]&gt;            
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
On May 13, 2008, at 2:58 AM, Wen Hao Wang wrote:
<br>

<br>
<span class="quotelev1">&gt; I run client/mtt with debug model, and found mtt script exited in
</span><br>
<span class="quotelev1">&gt; following code section of lib/MTT/Module.pm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 32 my $str = &quot;require $module&quot;;
</span><br>
<span class="quotelev1">&gt; 33 Debug(&quot;Evaluating: $str\n&quot;);
</span><br>
<span class="quotelev1">&gt; 34 my $check = eval $str;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When require error occured, $str was set to
</span><br>
<span class="quotelev1">&gt; &quot;MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt; Simple&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>
Note that this *usually* indicates an error in the INI file.  Perhaps
<br>
we should have better error checking/reporting for this case...
<br>

<br>
Can you send your ini file?
<br>

<br>
<span class="quotelev1">&gt; This is not a valid Perl module, so mtt failed. I had no time to
</span><br>
<span class="quotelev1">&gt; probe why/where such value was got. I just modified Module.pm to
</span><br>
<span class="quotelev1">&gt; work around the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_host MTT]# !diff
</span><br>
<span class="quotelev1">&gt; diff primary/Module.pm ./lib/MTT/Module.pm
</span><br>
<span class="quotelev1">&gt; 31a32,38
</span><br>
<span class="quotelev2">&gt; &gt; if ($module =~ m/Simple/)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; if (length($module) &gt; 26)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; ($module) = $module =~ m/(.*::Simple)/;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>
This should not be necessary; we all run MTT with the Specify::Simple
<br>
module every night.
<br>

<br>
<span class="quotelev1">&gt; With this workaround, $str was changed back to
</span><br>
<span class="quotelev1">&gt; &quot;MTT::Test::Specify::Simple&quot;, and mtt script could continue. Ater
</span><br>
<span class="quotelev1">&gt; all the tests finished, I found some MTT cases failed. For those
</span><br>
<span class="quotelev1">&gt; failed cases, who will probe it? Or how can I probe them? Here list
</span><br>
<span class="quotelev1">&gt; one section that returned error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | command | mpirun -np 2 --mca btl tcp,self --prefix /LTC/MTT/
</span><br>
<span class="quotelev1">&gt; installs/Urs4/install       |
</span><br>
<span class="quotelev1">&gt; | | t_win |
</span><br>
<span class="quotelev1">&gt; | duration | 0 seconds |
</span><br>
<span class="quotelev1">&gt; | exit_value | 1 |
</span><br>
<span class="quotelev1">&gt; | result_message | Failed; exit status: 1 |
</span><br>
<span class="quotelev1">&gt; | result_stdout | WIN_BASIC: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP2: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP3: passed |
</span><br>
<span class="quotelev1">&gt; | | LOCK_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | FENCE_EPOCH: failed |
</span><br>
<span class="quotelev1">&gt; | | MISC: passed |
</span><br>
<span class="quotelev1">&gt; | | POST_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_BASIC: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP2: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP3: passed |
</span><br>
<span class="quotelev1">&gt; | | LOCK_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | FENCE_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | MISC: passed |
</span><br>
<span class="quotelev1">&gt; | | POST_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | t_win: FAILED 1 |
</span><br>
<span class="quotelev1">&gt; | start_timestamp | Tue May 13 04:54:59 2008 |
</span><br>
<span class="quotelev1">&gt; | test_name | t_win |
</span><br>
<span class="quotelev1">&gt; | variant | 2 |
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>
These results are reported to the central OMPI MTT database where we
<br>
get e-mail reports each morning.
<br>

<br>
This particular failure is a known issue; I believe there's a trac
<br>
ticket open on it.
<br>

<br>
--
<br>
Jeff Squyres
<br>
Cisco Systems
<br>

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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0557/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0557/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0557/pic21565.gif" alt="pic21565.gif">
<!-- attachment="pic21565.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0557/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>In reply to:</strong> <a href="0546.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0558.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0558.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
