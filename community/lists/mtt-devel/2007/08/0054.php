<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 15:00:46 2007" -->
<!-- isoreceived="20070830190046" -->
<!-- sent="Thu, 30 Aug 2007 15:00:37 -0400" -->
<!-- isosent="20070830190037" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r964" -->
<!-- id="46D713D5.30402_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070830181058.GM11675_at_sun.com" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 15:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0055.php">Jeff Squyres: "[MTT devel] No nightly summary last night?"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r964"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r964"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh you mean why would anyone want to submit their intel test results to 
<br>
the database??
<br>
<p>So the scenario is like this, I have a dev ws setup for a pending CMR 
<br>
for my PML changes. The changes are also in my tmp branch. The point of 
<br>
running the test to make sure my new dev stuff works before putting back 
<br>
to v1.2 branch.
<br>
<p>So I guess one could argue I could have MTT to bring over the test from 
<br>
tmp branch instead of my dev ws to run the tests.
<br>
<p>Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Pak, we're scratching our heads on this new &quot;developer
</span><br>
<span class="quotelev1">&gt; results into central database&quot; use case. Could you give more
</span><br>
<span class="quotelev1">&gt; details?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug/30/2007 01:32:26PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ethan --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did Pak really mean to submit to the database?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 30, 2007, at 1:22 PM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-08-30 13:22:06 EDT (Thu, 30 Aug 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 964
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/964">https://svn.open-mpi.org/trac/mtt/changeset/964</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Increase the 'mpi_version' char length due to the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL QUERY: INSERT INTO mpi_get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (mpi_get_id, mpi_name, mpi_version) VALUES
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ('507', 'developer',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '_workspace_paklui_ompi-paklui-1.2-pml_shared- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install_SunOS_sparc_2007.08.29_bin_mpirun')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL ERROR: ERROR:  value too long for type character varying(32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL ERROR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/server/sql/v3/schemas-v3.sql |     2 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/server/sql/v3/schemas-v3.sql
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/server/sql/v3/schemas-v3.sql	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/server/sql/v3/schemas-v3.sql	2007-08-30 13:22:06 EDT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Thu, 30 Aug 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -107,7 +107,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      -- Current Max: 21 chars
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mpi_name    varchar(64) NOT NULL DEFAULT 'bogus',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      -- Current Max: 24 chars
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    mpi_version varchar(32) NOT NULL DEFAULT 'bogus',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    mpi_version varchar(128) NOT NULL DEFAULT 'bogus',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      UNIQUE (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              mpi_name,
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
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0055.php">Jeff Squyres: "[MTT devel] No nightly summary last night?"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r964"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r964"</a>
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
