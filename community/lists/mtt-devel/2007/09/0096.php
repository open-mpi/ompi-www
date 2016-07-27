<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 11:18:05 2007" -->
<!-- isoreceived="20070911151805" -->
<!-- sent="Tue, 11 Sep 2007 11:18:00 -0400" -->
<!-- isosent="20070911151800" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r999" -->
<!-- id="20070911151800.GW11675_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F165D5CF-AB31-436A-BC40-E2C6595EEF38_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-11 11:18:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Previous message:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>In reply to:</strong> <a href="0092.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Reply:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep/11/2007 10:50:11AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ethan --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this more appropriate for a Sun-specific .pm file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>That's for an Install/ClusterTools plugin.  I thought it
<br>
made sense adjacent to &quot;svn_checkout&quot;, though I *believe*
<br>
Teamware could run on non-Sun platforms (it's a wrapper
<br>
layer around SCCS).
<br>
<p>-Ethan
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 7, 2007, at 11:42 PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: emallove
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2007-09-07 23:42:10 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 999
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/999">https://svn.open-mpi.org/trac/mtt/changeset/999</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Added `&amp;MTT::Files::teamware_bringover()`.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    tmp/jms-new-parser/lib/MTT/Files.pm |    16 ++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 16 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: tmp/jms-new-parser/lib/MTT/Files.pm
</span><br>
<span class="quotelev2">&gt; &gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt; &gt; ========
</span><br>
<span class="quotelev2">&gt; &gt; --- tmp/jms-new-parser/lib/MTT/Files.pm	(original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp/jms-new-parser/lib/MTT/Files.pm	2007-09-07 23:42:10 EDT  
</span><br>
<span class="quotelev2">&gt; &gt; (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -301,6 +301,22 @@
</span><br>
<span class="quotelev2">&gt; &gt;      return undef;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +# Do a (Sun) TeamWare bringover
</span><br>
<span class="quotelev2">&gt; &gt; +sub teamware_bringover {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($file_list_program, $parent, $child, $path) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $str;
</span><br>
<span class="quotelev2">&gt; &gt; +    $str .= &quot;bringover&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    $str .= &quot; -p $parent&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    $str .= &quot; -w $child&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    $str .= &quot; $path&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    $str .= &quot; -f $file_list_program\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ret = MTT::DoCommand::Cmd(1, $str);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return $ret;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  # Copy and entire file tree
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Previous message:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>In reply to:</strong> <a href="0092.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Reply:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
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
