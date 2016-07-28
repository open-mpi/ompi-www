<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 11:28:20 2007" -->
<!-- isoreceived="20070621152820" -->
<!-- sent="Thu, 21 Jun 2007 11:29:02 -0400" -->
<!-- isosent="20070621152902" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] INI trick for single-node testing" -->
<!-- id="20070621152902.GD8468_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 11:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
<li><strong>Reply:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a way to toggle single-node testing at the command
<br>
line. E.g., it looks like this:
<br>
<p>&nbsp;&nbsp;$ client/mtt run_on_single_node=1 ...
<br>
&nbsp;&nbsp;$ client/mtt run_on_single_node=0 ...
<br>
<p>I just needed the below INI mojo to get this going.
<br>
<p>Added a &quot;run_on_single_node&quot; boolean to my [MTT] section.
<br>
(&quot;ompinfo&quot; is an internal Sun script that spits out
<br>
hard-coded hostlist's based on what node the user is on.)
<br>
<p>{{{
<br>
[MTT]
<br>
...
<br>
# Boolean which tells MTT to run on a single node
<br>
run_on_single_node = 0
<br>
<p>ompinfo = /ws/ompi-tools/bin/ompinfo
<br>
hostlist = &lt;&lt;EOT
<br>
&amp;perl(&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($run_on_single_node) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return `$ompinfo -j' ' | cut -f1 -d' '`;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return `$ompinfo -j' '`;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&quot;)
<br>
EOT
<br>
}}}
<br>
<p>And then I have this in my [MPI Details] section: 
<br>
<p>{{{
<br>
[MPI Details: Open MPI]
<br>
...
<br>
# Figure out which btl's to use
<br>
btls = &lt;&lt;EOT
<br>
&amp;perl(&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Return cached btls var, if we have it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (defined(\@btls)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \\\@btls;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# What hosts is MTT currently running on?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my \@hosts = split /\s+|,/, hostlist_hosts();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If there is only one host, use SM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (scalar(\@hosts) &lt; 2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(\@btls, 'self,sm');
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Otherwise, use uDAPL or TCP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($ib_is_up) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(\@btls, 'self,udapl');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(\@btls, 'self,tcp');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \\\@btls;
<br>
&quot;)
<br>
EOT
<br>
}}}
<br>
<p>Is there an easier way to do this?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
<li><strong>Reply:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
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
