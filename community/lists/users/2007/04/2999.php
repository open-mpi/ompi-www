<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 04:50:54 2007" -->
<!-- isoreceived="20070404085054" -->
<!-- sent="Wed, 04 Apr 2007 10:50:49 +0200" -->
<!-- isosent="20070404085049" -->
<!-- name="Marcin Dulak" -->
<!-- email="Marcin_Dulak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec" -->
<!-- id="461366E9.700_at_poczta.onet.pl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] problems with profile.d scripts generated using openmpi.spec" -->
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
<strong>From:</strong> Marcin Dulak (<em>Marcin_Dulak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 04:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3000.php">JiaXing Cai: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Maybe in reply to:</strong> <a href="2988.php">Marcin Dulak: "[OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the links.
<br>
I tried the  Revision 14205 
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/14205">https://svn.open-mpi.org/trac/ompi/changeset/14205</a>&gt; of  openmpi.spec 
<br>
and it works for me only after some changes:
<br>
- in the mpivars-1.2.csh script part,
<br>
- and related to the line 330 in the original (14205 
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/14205">https://svn.open-mpi.org/trac/ompi/changeset/14205</a>&gt;) openmpi.spec:
<br>
<p>eval &quot;set %{configure_options}&quot;
<br>
<p>which will fail, if configure_options starts with --, in which case it 
<br>
will be interpreted as an option to set.
<br>
I attach the patch file.
<br>
<p>Marcin
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2999/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2999/openmpi.spec.patch">openmpi.spec.patch</a>
</ul>
<!-- attachment="openmpi.spec.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3000.php">JiaXing Cai: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Maybe in reply to:</strong> <a href="2988.php">Marcin Dulak: "[OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
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
