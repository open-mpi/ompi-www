<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 18:33:11 2006" -->
<!-- isoreceived="20060718223311" -->
<!-- sent="Tue, 18 Jul 2006 18:32:48 -0400" -->
<!-- isosent="20060718223248" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="[MTT users] perfbase.php not slurping test run data" -->
<!-- id="44BD6190.9080706_at_Sun.COM" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 18:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Maybe reply:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
perfbase.php seems to only populate perfbase with mpi_install and test_build
<br>
data. In other words, data correlating to these files is getting input to
<br>
perfbase:
<br>
<p>&nbsp;&nbsp;inp_mpi_install.xml
<br>
&nbsp;&nbsp;inp_test_build.xml
<br>
<p>Data correlating to this file is _not_ getting input to perfbase:
<br>
<p>&nbsp;&nbsp;inp_test_run_correctness.xml
<br>
<p>I verified this by looking at the perfbase data with pg_dump (postgres's
<br>
command-line tool to dump the entire database), which shows that there is no
<br>
data for these fields:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;test_pass
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test_command
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test_np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test_message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;stderr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;stdout&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;start_timestamp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;stop_timestamp
<br>
<p>The above fields belong to the rundata table. I can see from the perfbase
<br>
--debug output there are UPDATEs/INSERTs into the below tables, but no
<br>
UPDATEs/INSERTs into rundata:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;run_metadata
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rundata_once
<br>
<p>It looks like the data is getting parsed correctly:
<br>
<p>E.g.,
<br>
<p>#* checking &lt;named_location&gt;: found 'test_name: '
<br>
#* parsing &lt;named_location&gt; 'test_name: '
<br>
&nbsp;&nbsp;&nbsp;content for 'test_name': 'f77_hello'
<br>
*# Processing line:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test_np: 2
<br>
#* checking &lt;named_location&gt;: found 'test_np: '
<br>
#* parsing &lt;named_location&gt; 'test_np: '
<br>
&nbsp;&nbsp;&nbsp;content for 'test_np': '2'
<br>
<p>&nbsp;&nbsp;&nbsp;... [snip] ...
<br>
<p>And there are no error messages from perfbase. Can anyone give me a tip on how
<br>
to track down the missing data?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Maybe reply:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
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
