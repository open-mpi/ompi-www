<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 21 06:43:21 2006" -->
<!-- isoreceived="20060121114321" -->
<!-- sent="Sat, 21 Jan 2006 06:39:26 -0500" -->
<!-- isosent="20060121113926" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  ompi_get_version" -->
<!-- id="2F79CC62-0516-4612-B99D-D12F467A6163_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060121081925.GA21946_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-01-21 06:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0705.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0703.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0703.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0705.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Reply:</strong> <a href="0705.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 21, 2006, at 3:19 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Should be fixed in patch below.  Also, and I forgot to add this in the
</span><br>
<span class="quotelev1">&gt; first version of the patch: for configure, produce some output if the
</span><br>
<span class="quotelev1">&gt; SVN server is contacted.  I kept wondering why the configure script
</span><br>
<span class="quotelev1">&gt; halted for a while there in what was a seemingly trivial local  
</span><br>
<span class="quotelev1">&gt; operation
</span><br>
<span class="quotelev1">&gt; until I discovered what took so long there.
</span><br>
<p>Just FYI: the SVN server is not contacted.  svnversion is a local  
<br>
operation (although it traverses your entire SVN checkout, which is  
<br>
why it can be slow).
<br>
<p><span class="quotelev1">&gt; +    if test &quot;$gv_want_svn&quot; = 1 &amp;&amp; test &quot;$gv_need_svn&quot; = 1; then
</span><br>
<p>Just curious -- I typically use &quot;-a&quot; for multiple ANDed test  
<br>
conditions, but you used &quot;&amp;&amp;&quot;.  Is &quot;-a&quot; less portable?
<br>
<p><span class="quotelev1">&gt; +        if test &quot;$gv_svn_r&quot; = -1; then
</span><br>
<span class="quotelev1">&gt; +	    m4_ifdef([AC_MSG_CHECKING],
</span><br>
<span class="quotelev1">&gt; +		     [AC_MSG_CHECKING([Obtaining SVN version])])
</span><br>
<p>Totally minor point here, but will this print:
<br>
<p>checking Obtaining SVN version...
<br>
<p>If so, we should probably remove the redundant verb.  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0705.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0703.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0703.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0705.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Reply:</strong> <a href="0705.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
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
