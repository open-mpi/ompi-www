<?
$subject_val = "Re: [OMPI devel] RFC: New memchecker component - mempin";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 08:52:19 2012" -->
<!-- isoreceived="20121009125219" -->
<!-- sent="Tue, 09 Oct 2012 14:55:17 +0200" -->
<!-- isosent="20121009125517" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: New memchecker component - mempin" -->
<!-- id="50741EB5.3000001_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5072CFB1.5000400_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: New memchecker component - mempin<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 08:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11579.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Previous message:</strong> <a href="11577.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="11573.php">Shiqing Fan: "[OMPI devel] RFC: New memchecker component - mempin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a few more important points that I forgot to mention.
<br>
<p>This work has been helped and guided by Rainer. He will also continue to 
<br>
use the tool for further research. :-)
<br>
<p>This new component can be enabled via option --enable-memchecker. When 
<br>
disabled, there won't be any influence for Open MPI and application.
<br>
<p>The patch has been tested based on a version of Open MPI a few month 
<br>
ago, but it should be easy to move to the latest OMPI trunk. I will make 
<br>
a bitbucket branch for merging it back.
<br>
<p>I would like explain more details in the call today.
<br>
<p>On 2012-10-08 3:05 PM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; *What:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A new memory checking tool named MemPin was developed based on the 
</span><br>
<span class="quotelev1">&gt; Intel Pin framework. It uses a callback mechanism to do the similar 
</span><br>
<span class="quotelev1">&gt; tasks as Valgrind Memcheck. The new tool is tiny and flexible, and 
</span><br>
<span class="quotelev1">&gt; user may implement his own callback function for different purposes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The basic idea here for Open MPI is to watch over the communication 
</span><br>
<span class="quotelev1">&gt; buffers. Every access to the buffers will be detected, and for 
</span><br>
<span class="quotelev1">&gt; specific memory operation (read/write), a memory check callback will 
</span><br>
<span class="quotelev1">&gt; be triggered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only the required memory will be taken care of, so the shadow memory 
</span><br>
<span class="quotelev1">&gt; can be kept to be as small as possible. The implemented shadow memory 
</span><br>
<span class="quotelev1">&gt; for Open MPI is handled in bit-wise, i.e. every byte of memory has 2 
</span><br>
<span class="quotelev1">&gt; bits of shadow (4 different states. This doesn't provide bit-wise 
</span><br>
<span class="quotelev1">&gt; validity of the memory like Valgirnd, where every byte of memory has 9 
</span><br>
<span class="quotelev1">&gt; bits of shadow. However, the shadow memory for this new tool is 
</span><br>
<span class="quotelev1">&gt; extensible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Several predefined macros that may be used in user application and 
</span><br>
<span class="quotelev1">&gt; Open MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * *MEMPIN_RUNNING_WITH_PIN*: Checks whether the user application is
</span><br>
<span class="quotelev1">&gt;     running under MemPin and Pin
</span><br>
<span class="quotelev1">&gt;   * *MEMPIN_REG_MEM_WATCH*: Registers the memory entry for specific
</span><br>
<span class="quotelev1">&gt;     memory operation
</span><br>
<span class="quotelev1">&gt;   * *MEMPIN_UPDATE_MEM_WATCH:* Updates the memory entry parameters for
</span><br>
<span class="quotelev1">&gt;     specific memory operation
</span><br>
<span class="quotelev1">&gt;   * *MEMPIN_UNREG_MEM_WATCH*: Unregisters one memory entry
</span><br>
<span class="quotelev1">&gt;   * *MEMPIN_UNREG_ALL_MEM_WATCH*: Unregisters all the memory entries
</span><br>
<span class="quotelev1">&gt;   * *MEMPIN_SEARCH_MEM_INDEX*: Returns the memory entry index from the
</span><br>
<span class="quotelev1">&gt;     memory address storage
</span><br>
<span class="quotelev1">&gt;   * *MEMPIN_PRINT_CALLSTACK*: Prints the current callstack to standard
</span><br>
<span class="quotelev1">&gt;     output or a file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new component mempin will have the same memchecker API as valgrind 
</span><br>
<span class="quotelev1">&gt; component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *WHY:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This new implementation has similar functionalities as Valgrind 
</span><br>
<span class="quotelev1">&gt; Memcheck, but it is lightweight, faster, extensible and flexible. It 
</span><br>
<span class="quotelev1">&gt; also supports for Windows platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *WHERE:*
</span><br>
<span class="quotelev1">&gt;       opal/mca/memchecker/
</span><br>
<span class="quotelev1">&gt;       ompi/include/ompi/memchecker.h or another header file.
</span><br>
<span class="quotelev1">&gt;       ompi/mca/pml/ob1    several memchecker macro need to be updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *WHEN:*
</span><br>
<span class="quotelev1">&gt;      If everything is fine, probably some time next week or later this 
</span><br>
<span class="quotelev1">&gt; month.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We probably can also discuss it in the next teleconf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11579.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Previous message:</strong> <a href="11577.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="11573.php">Shiqing Fan: "[OMPI devel] RFC: New memchecker component - mempin"</a>
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
