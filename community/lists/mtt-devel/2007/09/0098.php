<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 12:02:42 2007" -->
<!-- isoreceived="20070911160242" -->
<!-- sent="Tue, 11 Sep 2007 12:02:20 -0400" -->
<!-- isosent="20070911160220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r999" -->
<!-- id="F8CCA5D7-DA87-4A68-9481-06FD7E9425A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070911151800.GW11675_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-11 12:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Previous message:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>In reply to:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool.
<br>
<p>On Sep 11, 2007, at 11:18 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Sep/11/2007 10:50:11AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ethan --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this more appropriate for a Sun-specific .pm file?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's for an Install/ClusterTools plugin.  I thought it
</span><br>
<span class="quotelev1">&gt; made sense adjacent to &quot;svn_checkout&quot;, though I *believe*
</span><br>
<span class="quotelev1">&gt; Teamware could run on non-Sun platforms (it's a wrapper
</span><br>
<span class="quotelev1">&gt; layer around SCCS).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 7, 2007, at 11:42 PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: emallove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-09-07 23:42:10 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 999
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/999">https://svn.open-mpi.org/trac/mtt/changeset/999</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added `&amp;MTT::Files::teamware_bringover()`.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    tmp/jms-new-parser/lib/MTT/Files.pm |    16 ++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 files changed, 16 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: tmp/jms-new-parser/lib/MTT/Files.pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- tmp/jms-new-parser/lib/MTT/Files.pm	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ tmp/jms-new-parser/lib/MTT/Files.pm	2007-09-07 23:42:10 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -301,6 +301,22 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return undef;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Do a (Sun) TeamWare bringover
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +sub teamware_bringover {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    my ($file_list_program, $parent, $child, $path) = @_;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    my $str;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $str .= &quot;bringover&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $str .= &quot; -p $parent&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $str .= &quot; -w $child&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $str .= &quot; $path&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $str .= &quot; -f $file_list_program\n&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    my $ret = MTT::DoCommand::Cmd(1, $str);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return $ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # Copy and entire file tree
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Previous message:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>In reply to:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
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
