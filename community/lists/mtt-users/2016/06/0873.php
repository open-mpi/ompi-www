<?
$subject_val = "[MTT users] Error while test-get";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 03:02:54 2016" -->
<!-- isoreceived="20160617070254" -->
<!-- sent="Fri, 17 Jun 2016 12:32:33 +0530" -->
<!-- isosent="20160617070233" -->
<!-- name="Abhishek Joshi" -->
<!-- email="abhishek.joshi_at_[hidden]" -->
<!-- subject="[MTT users] Error while test-get" -->
<!-- id="CAK_Rsw3us5sdESHEyiGzQM2mfkJaszsBTa1EQJ6M8ULg1mbt0A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [MTT users] Error while test-get<br>
<strong>From:</strong> Abhishek Joshi (<em>abhishek.joshi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 03:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">Gilles Gouaillardet: "Re: [MTT users] Error while test-get"</a>
<li><strong>Previous message:</strong> <a href="0872.php">C Bergstr&#195;&#182;m: "Re: [MTT users] MTT username/password"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0874.php">Gilles Gouaillardet: "Re: [MTT users] Error while test-get"</a>
<li><strong>Reply:</strong> <a href="0874.php">Gilles Gouaillardet: "Re: [MTT users] Error while test-get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
On trying to do a test-get using mtt, I get the below error:
<br>
I am using this command:
<br>
./client/mtt  -d --no-reporter  --test-get --file ompi-core-template.ini
<br>
&nbsp;--print-time --verbose
<br>
<p><p>Running command: rm -rf ompi-tests.git
<br>
*** Child process stdout closed
<br>
*** Child process now dead
<br>
Command complete, exit status: 0
<br>
<span class="quotelev2">&gt;&gt; Command: rm -rf ompi-tests.git
</span><br>
&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00 0.01u 0.00s
<br>
Evaluating: require MTT::Common::SCM::Git
<br>
**** ERROR: Module aborted: MTT::Test::Get::SCM:Get: *** ERROR: Module*
<br>
*    aborted during require: MTT::Common::SCM::Git: Can't*
<br>
* locate URI.pm in @INC (you may need to install the URI module)*
<br>
*    (@INC*
<br>
contains: /home/abjoshi/mtt/lib /etc/perl
<br>
/usr/local/lib/aarch64-linux-gnu/perl/5.20.2
<br>
/usr/local/share/perl/5.20.2 /usr/lib/aarch64-linux-gnu/perl5/5.20
<br>
/usr/share/perl5 /usr/lib/aarch64-linux-gnu/perl/5.20
<br>
/usr/share/perl/5.20 /usr/local/lib/site_perl .) at
<br>
/home/abjoshi/mtt/lib/MTT/Common/SCM/Git.pm line 16.
<br>
BEGIN failed--compilation aborted at
<br>
/home/abjoshi/mtt/lib/MTT/Common/SCM/Git.pm line 16.
<br>
Compilation failed in require at (eval 29) line 2.
<br>
<p><p>Can anyone please advise?
<br>
<pre>
-- 
Abhishek
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">Gilles Gouaillardet: "Re: [MTT users] Error while test-get"</a>
<li><strong>Previous message:</strong> <a href="0872.php">C Bergstr&#195;&#182;m: "Re: [MTT users] MTT username/password"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0874.php">Gilles Gouaillardet: "Re: [MTT users] Error while test-get"</a>
<li><strong>Reply:</strong> <a href="0874.php">Gilles Gouaillardet: "Re: [MTT users] Error while test-get"</a>
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
