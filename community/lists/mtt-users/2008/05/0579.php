<?
$subject_val = "Re: [MTT users] Can not find my testing results in OMPI MTT DB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 14:36:27 2008" -->
<!-- isoreceived="20080521183627" -->
<!-- sent="Wed, 21 May 2008 14:36:14 -0400" -->
<!-- isosent="20080521183614" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Can not find my testing results in OMPI MTT DB" -->
<!-- id="20080521183614.GG51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="483443BE.6050809_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [MTT users] Can not find my testing results in OMPI MTT DB<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 14:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0580.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0580.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0580.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May/21/2008 06:46:06PM, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; I sent it directly to your email. Please check.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<p>Got it. Thanks. It's a PHP memory overload issue.
<br>
(Apparently I didn't look far back enough in the httpd
<br>
error_logs.) See below.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, May/21/2008 05:19:44PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Are we running into http max memory problems or http max upload size 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problems again?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I guess it is some server side issue, you need to check the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /var/log/httpd/* log on the server.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only thing I found in the httpd logs
</span><br>
<span class="quotelev2">&gt; &gt; (/var/log/httpd/www.open-mpi.org/error_log*) was this PHP
</span><br>
<span class="quotelev2">&gt; &gt; warning, which I don't think would result in lost results:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PHP Warning:  array_shift(): The argument should be an array in .../submit/index.php on line 1683
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't received any emailed Postgres errors either. When
</span><br>
<span class="quotelev2">&gt; &gt; were these results submitted? I searched for &quot;mellanox&quot; over
</span><br>
<span class="quotelev2">&gt; &gt; the past four days. It seem the results aren't buried in
</span><br>
<span class="quotelev2">&gt; &gt; here, because I see no test run failures ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=659">http://www.open-mpi.org/mtt/index.php?do_redir=659</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm assuming you're running with two Reporter INI sections:
</span><br>
<span class="quotelev2">&gt; &gt; Textfile and MTTDatabase? Can you send some MTT client
</span><br>
<span class="quotelev2">&gt; &gt; --verbose/--debug output from the below runs?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On May 21, 2008, at 5:28 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Here is test result from my last mtt run:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Phase       | Section        | Pass | Fail | Time out | Skip |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | MPI install | ompi/gcc       | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | MPI install | ompi/intel-9.0 | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | trivial        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | trivial        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | imb            | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | imb            | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | presta         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | presta         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | netpipe        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Build  | netpipe        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; In the OMPI MTT DB (<a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>) I found the follow
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;test run&quot; results:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; And I can not find this one:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; | Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
</span><br>
<p><p>Some missing results are in mttdb_debug_file.16.txt (and
<br>
17.txt), which are the largest .txt files of the bunch. 8
<br>
variants isn't that much, but maybe it causes a problem when
<br>
there's lots of stderr/stdout? I'm surprised
<br>
submit/index.php barfs on files this size:
<br>
<p>&nbsp;&nbsp;$ ls -l
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;-rw-r--r--    1 em162155 staff      956567 May 21 14:21 mttdb_debug_file.16.inc.gz
<br>
&nbsp;&nbsp;-rw-r--r--    1 em162155 staff     9603132 May 21 14:09 mttdb_debug_file.16.txt
<br>
&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;$ client/mtt-submit -h www.open-mpi.org -f mttdb_debug_file.16.txt -z -u sun -p sun4sun -d
<br>
&nbsp;&nbsp;LWP::UserAgent::new: ()
<br>
&nbsp;&nbsp;LWP::UserAgent::proxy: http
<br>
<p>&nbsp;&nbsp;Filelist: $VAR1 = 'mttdb_debug_file.16.txt';
<br>
&nbsp;&nbsp;LWP::MediaTypes::read_media_types: Reading media types from /ws/ompi-tools/lib/perl5/5.8.8/LWP/media.types
<br>
&nbsp;&nbsp;LWP::MediaTypes::read_media_types: Reading media types from /usr/perl5/site_perl/5.8.4/LWP/media.types
<br>
&nbsp;&nbsp;LWP::MediaTypes::read_media_types: Reading media types from /home/em162155/.mime.types
<br>
&nbsp;&nbsp;LWP::UserAgent::request: ()
<br>
&nbsp;&nbsp;LWP::UserAgent::send_request: POST <a href="http://www.open-mpi.org/mtt/submit/index.php">http://www.open-mpi.org/mtt/submit/index.php</a>
<br>
&nbsp;&nbsp;LWP::UserAgent::_need_proxy: Not proxied
<br>
&nbsp;&nbsp;LWP::Protocol::http::request: ()
<br>
&nbsp;&nbsp;LWP::UserAgent::request: Simple response: OK
<br>
<p>&nbsp;&nbsp;$ tail -f /var/log/httpd/www.open-mpi.org/error_log | grep -w submit
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;[client 192.18.128.5] PHP Fatal error:  Allowed memory size of 33554432 bytes exhausted (tried to allocate 14 bytes) in /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php on line 1559
<br>
&nbsp;&nbsp;...
<br>
<p>We'll have to somehow be more efficient on these loops.
<br>
E.g., line 1559:
<br>
<p>&nbsp;&nbsp;&nbsp;foreach (array_keys($_POST) as $k) {
<br>
<p>Maybe if we broke $_POST up into multiple parts (e.g.,
<br>
$_POST_1, $_POST_2, ... $_POST_N)? Maybe we could do
<br>
something more efficient than array_keys here? I'm not sure.
<br>
<p>The only workaround on the client side would be to break up
<br>
the runs. Maybe do a single MPI Install at a time? Do
<br>
ompi/gcc then ompi/intel-9.0 as seperate invocations of the
<br>
MTT client.
<br>
<p>Sorry :-(
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From the log I see that all tests results were submitted successfully.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Can you please check ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="0580.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0580.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0580.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
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
