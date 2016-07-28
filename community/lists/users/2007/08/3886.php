<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 16:46:58 2007" -->
<!-- isoreceived="20070817204658" -->
<!-- sent="Fri, 17 Aug 2007 14:46:44 -0600" -->
<!-- isosent="20070817204644" -->
<!-- name="Tudor Buican" -->
<!-- email="tudor_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2.3: can't find mca libraries" -->
<!-- id="1187383604.11150.409.camel_at_showhorse.timb.com" -->
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
<strong>From:</strong> Tudor Buican (<em>tudor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 16:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3890.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<li><strong>Reply:</strong> <a href="3890.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, everybody.
<br>
<p>I just added OpenMPI 1.2.3 to a Rocks cluster that already had OpenMPI
<br>
1.1 installed. I built an rpm for 1.2.3 from the tarball I had
<br>
downloaded from open-mpi.org, and I used the option --with-devel-
<br>
headers, which I needed in order to build a software package that
<br>
required all the headers. 
<br>
<p>So far, so good. However, I am now trying to build yet another software
<br>
package that requires OpenMPI, only to find that it needs what appear to
<br>
be missing mca-related libraries. When I compared the lib directories
<br>
for OpenMPI versions 1.1 and 1.2.3, I noticed that 1.1 had a whole bunch
<br>
of mca-related libraries, like libmca_common_sm, mca_allocator_basic,
<br>
etc., which are missing from my newly built version 1.2.3.
<br>
<p>Any suggestions about how to get the full set of 1.2.3 libraries would
<br>
be greatly appreciated.
<br>
<p>Thanks in advance,
<br>
-Tudor
<br>
<p><p><pre>
-- 
Tudor N. Buican, PhD
Managing Member
SEA LLC
phone: 505-271-9925, 505-818-7303
fax: 505-271-9925
email: tudor_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3890.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<li><strong>Reply:</strong> <a href="3890.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
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
