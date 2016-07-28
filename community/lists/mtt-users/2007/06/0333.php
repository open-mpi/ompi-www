<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 16:43:33 2007" -->
<!-- isoreceived="20070621204333" -->
<!-- sent="Thu, 21 Jun 2007 16:43:12 -0400" -->
<!-- isosent="20070621204312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] INI trick for single-node testing" -->
<!-- id="9A87F3D5-EEBB-4208-BFB0-D18ACAC575FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070621152902.GD8468_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 16:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0334.php">Jeff Squyres: "[MTT users] OMPI C++ tests just split"</a>
<li><strong>Previous message:</strong> <a href="0332.php">Ethan Mallove: "[MTT users] INI trick for single-node testing"</a>
<li><strong>In reply to:</strong> <a href="0332.php">Ethan Mallove: "[MTT users] INI trick for single-node testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hrmm.  Perhaps <a href="https://svn.open-mpi.org/trac/mtt/ticket/189">https://svn.open-mpi.org/trac/mtt/ticket/189</a> is your  
<br>
best hope for something better...?
<br>
<p><p>On Jun 21, 2007, at 11:29 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a way to toggle single-node testing at the command
</span><br>
<span class="quotelev1">&gt; line. E.g., it looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ client/mtt run_on_single_node=1 ...
</span><br>
<span class="quotelev1">&gt;   $ client/mtt run_on_single_node=0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just needed the below INI mojo to get this going.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added a &quot;run_on_single_node&quot; boolean to my [MTT] section.
</span><br>
<span class="quotelev1">&gt; (&quot;ompinfo&quot; is an internal Sun script that spits out
</span><br>
<span class="quotelev1">&gt; hard-coded hostlist's based on what node the user is on.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; # Boolean which tells MTT to run on a single node
</span><br>
<span class="quotelev1">&gt; run_on_single_node = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompinfo = /ws/ompi-tools/bin/ompinfo
</span><br>
<span class="quotelev1">&gt; hostlist = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; &amp;perl(&quot;
</span><br>
<span class="quotelev1">&gt;      if ($run_on_single_node) {
</span><br>
<span class="quotelev1">&gt;         return `$ompinfo -j' ' | cut -f1 -d' '`;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;         return `$ompinfo -j' '`;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; &quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then I have this in my [MPI Details] section:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI]
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; # Figure out which btl's to use
</span><br>
<span class="quotelev1">&gt; btls = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; &amp;perl(&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Return cached btls var, if we have it
</span><br>
<span class="quotelev1">&gt;      if (defined(\@btls)) {
</span><br>
<span class="quotelev1">&gt;          return \\\@btls;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # What hosts is MTT currently running on?
</span><br>
<span class="quotelev1">&gt;      my \@hosts = split /\s+|,/, hostlist_hosts();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # If there is only one host, use SM
</span><br>
<span class="quotelev1">&gt;      if (scalar(\@hosts) &lt; 2) {
</span><br>
<span class="quotelev1">&gt;          push(\@btls, 'self,sm');
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Otherwise, use uDAPL or TCP
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          if ($ib_is_up) {
</span><br>
<span class="quotelev1">&gt;              push(\@btls, 'self,udapl');
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              push(\@btls, 'self,tcp');
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return \\\@btls;
</span><br>
<span class="quotelev1">&gt; &quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there an easier way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0334.php">Jeff Squyres: "[MTT users] OMPI C++ tests just split"</a>
<li><strong>Previous message:</strong> <a href="0332.php">Ethan Mallove: "[MTT users] INI trick for single-node testing"</a>
<li><strong>In reply to:</strong> <a href="0332.php">Ethan Mallove: "[MTT users] INI trick for single-node testing"</a>
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
