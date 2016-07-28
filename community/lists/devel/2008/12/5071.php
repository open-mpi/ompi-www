<?
$subject_val = "[OMPI devel] RFC: make predefined handles extern to pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 10:41:26 2008" -->
<!-- isoreceived="20081216154126" -->
<!-- sent="Tue, 16 Dec 2008 10:41:16 -0500" -->
<!-- isosent="20081216154116" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: make predefined handles extern to pointers" -->
<!-- id="4947CC1C.10800_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: make predefined handles extern to pointers<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-16 10:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Maybe reply:</strong> <a href="5075.php">Graham, Richard L.: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  To make predefined handles extern to pointers instead of an 
<br>
address of an extern to a structure.
<br>
<p>WHY:  To make OMPI more backwards compatible in regards to changes to 
<br>
structures that define predefined handles.
<br>
<p>WHERE:  In the trunk.  ompi/include/mpi.h.in and places in ompi that 
<br>
directly use the predefined handles.
<br>
<p>WHEN:  01/24/2009
<br>
<p>TIMEOUT:  01/10/2009
<br>
<p><p>____________________
<br>
<p>The point of this change is to improve the odds that an MPI application 
<br>
does not have to recompile when changes are made to the OMPI library.  
<br>
In this case specifically the predefined handles that use the structures 
<br>
for communicators, groups, ops, datatypes, error handlers, win, file, 
<br>
and info.
<br>
<p>An example of the changes for the communicator predefined handles can be 
<br>
found in the hg tmp workspace at 
<br>
ssh://www.open-mpi.org/~tdd/hg/predefcompat.
<br>
<p>Note, the one downfall that Jeff and I could think of by doing this is 
<br>
you potentially add one level of indirection but I believe that will be 
<br>
a small overhead and if you use one of the predefined handles 
<br>
repetitively (like in a loop) that the address will probably be stored 
<br>
in a register once and no additional over should be seen due to this change.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Maybe reply:</strong> <a href="5075.php">Graham, Richard L.: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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
