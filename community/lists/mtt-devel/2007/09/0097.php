<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 11:46:41 2007" -->
<!-- isoreceived="20070911154641" -->
<!-- sent="Tue, 11 Sep 2007 11:46:36 -0400" -->
<!-- isosent="20070911154636" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r998" -->
<!-- id="20070911154635.GX12598_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E5E70F06-1A94-445E-A734-C9D3C4A95CA4_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-11 11:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Previous message:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>In reply to:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Reply:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep/11/2007 10:50:35AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ethan --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you show the use case that motivated this change?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This test_executable was problematic: &quot;src/mpi2c++&quot;.
<br>
<p>&nbsp;&nbsp;--Calling: $ret = MTT::Values::Functions::MPI::OMPI::find_network(MTT::Values::Functions::test_command_line(), MTT::Values::Functions::t
<br>
&nbsp;&nbsp;est_executable());
<br>
&nbsp;&nbsp;&amp;test_command_line returning: mpirun --mca btl self,sm,tcp --host burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z
<br>
&nbsp;&nbsp;-1,burl-ct-v40z-1,burl-ct-v40z-1,burl-ct-v40z-1 -np 8 --prefix /opt/SUNWhpc src/mpi2c++_test
<br>
&nbsp;&nbsp;&amp;test_executable returning: src/mpi2c++_test
<br>
&nbsp;&nbsp;&amp;MPI::OMPI::find_network: got mpirun --mca btl self,sm,tcp --host burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z
<br>
&nbsp;&nbsp;-1,burl-ct-v40z-1,burl-ct-v40z-1,burl-ct-v40z-1 -np 8 --prefix /opt/SUNWhpc src/mpi2c++_test  src/mpi2c++_test
<br>
&nbsp;&nbsp;*** ERROR: Could not evaluate: $ret = MTT::Values::Functions::MPI::OMPI::find_network(MTT::Values::Functions::test_command_line(), MTT::Va
<br>
&nbsp;&nbsp;lues::Functions::test_executable());: Nested quantifiers in regex; marked by &lt;-- HERE in m/^(.+)\s*src/mpi2c++ &lt;-- HERE _test.+$/ at /worksp
<br>
&nbsp;&nbsp;ace/em162155/hpc/mtt/cron/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm line 102.
<br>
&nbsp;&nbsp;
<br>
-Ethan
<br>
<p><span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 7, 2007, at 11:52 AM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: emallove
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2007-09-07 11:52:04 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 998
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/998">https://svn.open-mpi.org/trac/mtt/changeset/998</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Escape the Perl regular expression quantifiers in
</span><br>
<span class="quotelev2">&gt; &gt; `&amp;MPI::OMPI::find_network` (for test names such as
</span><br>
<span class="quotelev2">&gt; &gt; `mpic++`).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm |     3 +++
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm
</span><br>
<span class="quotelev2">&gt; &gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt; &gt; ========
</span><br>
<span class="quotelev2">&gt; &gt; --- tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm	(original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm	 
</span><br>
<span class="quotelev2">&gt; &gt; 2007-09-07 11:52:04 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -98,6 +98,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;      # Ignore argv[0]
</span><br>
<span class="quotelev2">&gt; &gt;      $str =~ s/^\s*\S+\s*(.+)$/\1/;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    # Escape the quantifiers (for test names such as &quot;mpi2c++&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +    $final =~ s/(\?|\*|\+|\{|\})/\\$1/g;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;      # Ignore everything beyond $final
</span><br>
<span class="quotelev2">&gt; &gt;      $str =~ s/^(.+)\s*$final.+$/\1/;
</span><br>
<span class="quotelev2">&gt; &gt;      Debug(&quot;Examining: $str\n&quot;);
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
<li><strong>Next message:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Previous message:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>In reply to:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Reply:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
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
