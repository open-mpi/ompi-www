<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1316";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 11:01:48 2009" -->
<!-- isoreceived="20090915150148" -->
<!-- sent="Tue, 15 Sep 2009 11:01:43 -0400" -->
<!-- isosent="20090915150143" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1316" -->
<!-- id="20090915150142.GE34883_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200909151104.n8FB4xEL025214_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1316<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 11:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0433.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0431.php">Jeff Squyres: "[MTT devel] Fwd: [all-osl-users] OSL server reboots"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could we show more in the comment? E.g.,
<br>
<p>&nbsp;&nbsp;# &amp;create_hostlist(&quot;node[1-3],nodeXXX&quot;, 16)
<br>
&nbsp;&nbsp;# Expands to: node1:16 node2:16 node3:16 nodeXXX:16
<br>
&nbsp;&nbsp;# 
<br>
&nbsp;&nbsp;# &amp;create_hostlist(&quot;node,nodeXXX&quot;, 16);
<br>
&nbsp;&nbsp;# Expands to: node:16 nodeXXX:16
<br>
<p>Also, don't forget to update the CHANGES file with any new INI
<br>
funclets, predefined vars, etc.
<br>
<p>-Ethan
<br>
<p>On Tue, Sep/15/2009 07:04:59AM, miked_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2009-09-15 07:04:58 EDT (Tue, 15 Sep 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1316
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1316">https://svn.open-mpi.org/trac/mtt/changeset/1316</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; added new funclet: create_hostlist
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Values/Functions.pm |    24 ++++++++++++++++++++++++                
</span><br>
<span class="quotelev1">&gt;    1 files changed, 24 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values/Functions.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values/Functions.pm	2009-09-15 07:04:58 EDT (Tue, 15 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2963,4 +2963,28 @@
</span><br>
<span class="quotelev1">&gt;  	my $val = $current_report-&gt;{$param};
</span><br>
<span class="quotelev1">&gt;  	return $val;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +# generates hostlist for mtt
</span><br>
<span class="quotelev1">&gt; +# example: create_hostlist(&quot;node[1-100],nodeXXX&quot;, 16)
</span><br>
<span class="quotelev1">&gt; +sub create_hostlist {
</span><br>
<span class="quotelev1">&gt; +	my ($host_list, $cpu_per_node) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	my @hosts = split(/,/,$host_list);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	my @expanded_hosts = ();
</span><br>
<span class="quotelev1">&gt; +	for (my $x=0; $x &lt; $#hosts + 1; $x++) {
</span><br>
<span class="quotelev1">&gt; +		my $h = $hosts[$x];
</span><br>
<span class="quotelev1">&gt; +		$h=~s/[\[\]]//g;
</span><br>
<span class="quotelev1">&gt; +		if ($h =~ /^([^\d]+)(\d+)-(\d+)$/) {
</span><br>
<span class="quotelev1">&gt; +			my $n = $1;
</span><br>
<span class="quotelev1">&gt; +			for (my $i=$2; $i&lt;=$3;$i++) {
</span><br>
<span class="quotelev1">&gt; +				push @expanded_hosts, $n . $i . &quot;:&quot; . $cpu_per_node;
</span><br>
<span class="quotelev1">&gt; +			}
</span><br>
<span class="quotelev1">&gt; +		} else {
</span><br>
<span class="quotelev1">&gt; +			push @expanded_hosts, $h . &quot;:&quot; . $cpu_per_node;
</span><br>
<span class="quotelev1">&gt; +		}
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +	my $ret = join(&quot; &quot;, @expanded_hosts);
</span><br>
<span class="quotelev1">&gt; +	$ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;  1;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0433.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0431.php">Jeff Squyres: "[MTT devel] Fwd: [all-osl-users] OSL server reboots"</a>
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
