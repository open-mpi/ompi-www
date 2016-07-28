<?
$subject_val = "[OMPI devel] RFC: New memchecker component - mempin";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  8 09:02:56 2012" -->
<!-- isoreceived="20121008130256" -->
<!-- sent="Mon, 08 Oct 2012 15:05:53 +0200" -->
<!-- isosent="20121008130553" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: New memchecker component - mempin" -->
<!-- id="5072CFB1.5000400_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: New memchecker component - mempin<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-08 09:05:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11574.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Previous message:</strong> <a href="11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11575.php">Jeff Squyres: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Reply:</strong> <a href="11575.php">Jeff Squyres: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Reply:</strong> <a href="11578.php">Shiqing Fan: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*What:*
<br>
<p>A new memory checking tool named MemPin was developed based on the Intel 
<br>
Pin framework. It uses a callback mechanism to do the similar tasks as 
<br>
Valgrind Memcheck. The new tool is tiny and flexible, and user may 
<br>
implement his own callback function for different purposes.
<br>
<p>The basic idea here for Open MPI is to watch over the communication 
<br>
buffers. Every access to the buffers will be detected, and for specific 
<br>
memory operation (read/write), a memory check callback will be triggered.
<br>
<p>Only the required memory will be taken care of, so the shadow memory can 
<br>
be kept to be as small as possible. The implemented shadow memory for 
<br>
Open MPI is handled in bit-wise, i.e. every byte of memory has 2 bits of 
<br>
shadow (4 different states. This doesn't provide bit-wise validity of 
<br>
the memory like Valgirnd, where every byte of memory has 9 bits of 
<br>
shadow. However, the shadow memory for this new tool is extensible.
<br>
<p>Several predefined macros that may be used in user application and Open MPI:
<br>
<p>&nbsp;&nbsp;* *MEMPIN_RUNNING_WITH_PIN*: Checks whether the user application is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;running under MemPin and Pin
<br>
&nbsp;&nbsp;* *MEMPIN_REG_MEM_WATCH*: Registers the memory entry for specific
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memory operation
<br>
&nbsp;&nbsp;* *MEMPIN_UPDATE_MEM_WATCH:* Updates the memory entry parameters for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;specific memory operation
<br>
&nbsp;&nbsp;* *MEMPIN_UNREG_MEM_WATCH*: Unregisters one memory entry
<br>
&nbsp;&nbsp;* *MEMPIN_UNREG_ALL_MEM_WATCH*: Unregisters all the memory entries
<br>
&nbsp;&nbsp;* *MEMPIN_SEARCH_MEM_INDEX*: Returns the memory entry index from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memory address storage
<br>
&nbsp;&nbsp;* *MEMPIN_PRINT_CALLSTACK*: Prints the current callstack to standard
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output or a file
<br>
<p><p>The new component mempin will have the same memchecker API as valgrind 
<br>
component.
<br>
<p>*WHY:*
<br>
<p>This new implementation has similar functionalities as Valgrind 
<br>
Memcheck, but it is lightweight, faster, extensible and flexible. It 
<br>
also supports for Windows platforms.
<br>
<p>*WHERE:*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/memchecker/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/include/ompi/memchecker.h or another header file.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/mca/pml/ob1    several memchecker macro need to be updated.
<br>
<p><p>*WHEN:*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If everything is fine, probably some time next week or later this 
<br>
month.
<br>
<p><p>We probably can also discuss it in the next teleconf.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11574.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Previous message:</strong> <a href="11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11575.php">Jeff Squyres: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Reply:</strong> <a href="11575.php">Jeff Squyres: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Reply:</strong> <a href="11578.php">Shiqing Fan: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
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
