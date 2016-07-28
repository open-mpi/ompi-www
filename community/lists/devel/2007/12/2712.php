<?
$subject_val = "[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 10:43:34 2007" -->
<!-- isoreceived="20071204154334" -->
<!-- sent="Tue, 4 Dec 2007 12:43:28 -0300" -->
<!-- isosent="20071204154328" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()" -->
<!-- id="e7ba66e40712040743v2e48d4ddmb7e8d0225ad7d717_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 10:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2713.php">Ralph H Castain: "[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2711.php">Ralph H Castain: "[OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>Reply:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>As I see some activity on a related ticked, below some comments I
<br>
sended to Bill Gropp some days ago about this subject. Bill did not
<br>
write me back, I know he is really busy.
<br>
<p>Group operations are supposed to return new groups, so the used has to
<br>
free the result. Additionally, the standard say that those operations
<br>
may return the empty group. Then the issue: if the empty group is
<br>
returned, the user should or should not call MPI_Group_free()??. I
<br>
could not find any part of the standard about freeing MPI_GROUP_EMPTY.
<br>
<p>This issue is very similar to the one in MPI-1 related to error handlers.
<br>
<p>I believe the standard should be a bit stricter here, but many
<br>
possibilities are:
<br>
<p>* MPI_GROUP_EMPTY must be freed it it is the result of a group
<br>
operation. This way similar to the management of predefined error
<br>
handlers.
<br>
<p>* MPI_GROUP_EMPTY cannot be freed, as it is a predefined handle. Users
<br>
have to always check if the result of a group operation is
<br>
MPI_GROUP_EMPTY to know if they can or cannot free them. This way is
<br>
similar to the current management of predefined datatypes.
<br>
<p><p><p><pre>
--
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2713.php">Ralph H Castain: "[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2711.php">Ralph H Castain: "[OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>Reply:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
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
