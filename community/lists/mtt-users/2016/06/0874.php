<?
$subject_val = "Re: [MTT users] Error while test-get";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 03:07:05 2016" -->
<!-- isoreceived="20160617070705" -->
<!-- sent="Fri, 17 Jun 2016 16:07:00 +0900" -->
<!-- isosent="20160617070700" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [MTT users] Error while test-get" -->
<!-- id="b97971e2-33b2-baec-b4df-d467436a436f_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAK_Rsw3us5sdESHEyiGzQM2mfkJaszsBTa1EQJ6M8ULg1mbt0A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Error while test-get<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 03:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Abhishek Joshi: "[MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Abhishek Joshi: "[MTT users] Error while test-get"</a>
<li><strong>In reply to:</strong> <a href="0873.php">Abhishek Joshi: "[MTT users] Error while test-get"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>the message says the URI perl module is not found
<br>
<p><p>in redhat,
<br>
<p>yum install perl-URI
<br>
<p>will do the trick
<br>
<p><p>generally speaking, you can install perl modules with CPAN
<br>
<p>perl -MCPAN -e 'install URI'
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/17/2016 4:02 PM, Abhishek Joshi wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; On trying to do a test-get using mtt, I get the below error:
</span><br>
<span class="quotelev1">&gt; I am using this command:
</span><br>
<span class="quotelev1">&gt; ./client/mtt  -d --no-reporter  --test-get --file 
</span><br>
<span class="quotelev1">&gt; ompi-core-template.ini  --print-time --verbose
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf ompi-tests.git
</span><br>
<span class="quotelev1">&gt; *** Child process stdout closed
</span><br>
<span class="quotelev1">&gt; *** Child process now dead
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Command: rm -rf ompi-tests.git
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:00 0.01u 0.00s
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::SCM::Git
</span><br>
<span class="quotelev1">&gt; **** ERROR: Module aborted: MTT::Test::Get::SCM:Get: *** ERROR: Module*
</span><br>
<span class="quotelev1">&gt; *    aborted during require: MTT::Common::SCM::Git: Can't*
</span><br>
<span class="quotelev1">&gt; *locate URI.pm in @INC (you may need to install the URI module)*
</span><br>
<span class="quotelev1">&gt; *    (@INC*
</span><br>
<span class="quotelev1">&gt; contains: /home/abjoshi/mtt/lib /etc/perl
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/aarch64-linux-gnu/perl/5.20.2
</span><br>
<span class="quotelev1">&gt; /usr/local/share/perl/5.20.2 /usr/lib/aarch64-linux-gnu/perl5/5.20
</span><br>
<span class="quotelev1">&gt; /usr/share/perl5 /usr/lib/aarch64-linux-gnu/perl/5.20
</span><br>
<span class="quotelev1">&gt; /usr/share/perl/5.20 /usr/local/lib/site_perl .) at
</span><br>
<span class="quotelev1">&gt; /home/abjoshi/mtt/lib/MTT/Common/SCM/Git.pm line 16.
</span><br>
<span class="quotelev1">&gt; BEGIN failed--compilation aborted at
</span><br>
<span class="quotelev1">&gt; /home/abjoshi/mtt/lib/MTT/Common/SCM/Git.pm line 16.
</span><br>
<span class="quotelev1">&gt; Compilation failed in require at (eval 29) line 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone please advise?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/06/0873.php">http://www.open-mpi.org/community/lists/mtt-users/2016/06/0873.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Abhishek Joshi: "[MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Abhishek Joshi: "[MTT users] Error while test-get"</a>
<li><strong>In reply to:</strong> <a href="0873.php">Abhishek Joshi: "[MTT users] Error while test-get"</a>
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
