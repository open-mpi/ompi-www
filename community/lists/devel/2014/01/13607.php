<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 23:44:56 2014" -->
<!-- isoreceived="20140109044456" -->
<!-- sent="Wed, 8 Jan 2014 20:44:51 -0800" -->
<!-- isosent="20140109044451" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output" -->
<!-- id="4DFA1533-1985-4BE8-B08C-D1015DF78F5A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16D400OJmcZYtHSv-FbeKsd1PnE3oEekisdJGACGCp7gg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 23:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13606.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13594.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Updated (including the man page) - thanks!
<br>
<p>On Jan 8, 2014, at 3:48 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note the following still indicates that &quot;--bind-to none&quot; is the default:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ mpirun --help | grep -A2 'bind-to '
</span><br>
<span class="quotelev1">&gt;    --bind-to &lt;arg0&gt;      Policy for binding processes [none (default) |
</span><br>
<span class="quotelev1">&gt;                          hwthread | core | socket | numa | board] (supported
</span><br>
<span class="quotelev1">&gt;                          qualifiers: overload-allowed,if-supported)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, Jeff has clearly stated (<a href="http://www.open-mpi.org/community/lists/devel/2013/12/13456.php">http://www.open-mpi.org/community/lists/devel/2013/12/13456.php</a>) that bind-to-core is to be the default in 1.7.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The --map-by and --rank-by outputs are similarly out-dated:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ mpirun --help | grep -A1 'map-by '
</span><br>
<span class="quotelev1">&gt;    --map-by &lt;arg0&gt;       Mapping Policy [slot (default) | hwthread | core |
</span><br>
<span class="quotelev1">&gt;                          socket | numa | board | node]
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ mpirun --help | grep -A1 'rank-by '
</span><br>
<span class="quotelev1">&gt;    --rank-by &lt;arg0&gt;      Ranking Policy [slot (default) | hwthread | core |
</span><br>
<span class="quotelev1">&gt;                          socket | numa | board | node]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13606.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13594.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
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
