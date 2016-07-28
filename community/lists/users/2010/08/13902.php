<?
$subject_val = "Re: [OMPI users] Implementing a new BTL module in MCA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  3 10:57:34 2010" -->
<!-- isoreceived="20100803145734" -->
<!-- sent="Tue, 3 Aug 2010 20:27:29 +0530" -->
<!-- isosent="20100803145729" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Implementing a new BTL module in MCA" -->
<!-- id="AANLkTi=QV-=dp+wcT8uidzu1YRQJHym58FTiHM-p4nYD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C58084F.9010501_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Implementing a new BTL module in MCA<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-03 10:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13903.php">Jack Bryan: "[OMPI users] Open MPI C++ class datatype"</a>
<li><strong>Previous message:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="13899.php">Simone Pellegrini: "[OMPI users] Implementing a new BTL module in MCA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can find the template for a BTL in ompi/mca/btl/template (You will find
<br>
this on the subversion trunk). Copy and rename the folder/files. Use this as
<br>
a starting point.
<br>
For details on creating a new component (such as a new BTL) look here -
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
The following document might also be useful -
<br>
<a href="http://www.open-mpi.org/papers/trinity-btl-2009/xenmpi_report.pdf">http://www.open-mpi.org/papers/trinity-btl-2009/xenmpi_report.pdf</a>
<br>
<p>Regards
<br>
--Nysal
<br>
<p><p>On Tue, Aug 3, 2010 at 5:45 PM, Simone Pellegrini &lt;
<br>
spellegrini_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Deal all,
</span><br>
<span class="quotelev1">&gt; I need to implement an MPI layer on top of a message passing library which
</span><br>
<span class="quotelev1">&gt; is currently used in a particular device where I have to run MPI programs (
</span><br>
<span class="quotelev1">&gt; very vague, I know :) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead of reinventing the wheel, my idea was to reuse most of the Open MPI
</span><br>
<span class="quotelev1">&gt; implementation and just add a new layer to support my custom device. I guess
</span><br>
<span class="quotelev1">&gt; that extending the Byte Transfer Layer of the Modular Component Architecture
</span><br>
<span class="quotelev1">&gt; should make the job. Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, before starting wasting my time looking for documentation I wanted
</span><br>
<span class="quotelev1">&gt; to have some pointers to documentation regarding extension of Open MPI.
</span><br>
<span class="quotelev1">&gt; Which are the interfaces I have to extend? Is there any &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt; example on how to do it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; many thanks, Simone
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13903.php">Jack Bryan: "[OMPI users] Open MPI C++ class datatype"</a>
<li><strong>Previous message:</strong> <a href="13901.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="13899.php">Simone Pellegrini: "[OMPI users] Implementing a new BTL module in MCA"</a>
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
