<?
$subject_val = "Re: [OMPI users] Mac OS X Static PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 15:28:18 2011" -->
<!-- isoreceived="20110303202818" -->
<!-- sent="Thu, 03 Mar 2011 15:28:08 -0500" -->
<!-- isosent="20110303202808" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X Static PGI" -->
<!-- id="4D6FF9D8.7090600_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Mac OS X Static PGI" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac OS X Static PGI<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-03 15:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Maybe in reply to:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
UPDATE:
<br>
<p>Sorry for the delay but I wanted to make sure PGI was ok with me sharing 
<br>
their workaround.
<br>
<p>Further conversation with PGI tech support has yielded a solution. The 
<br>
opal/util/if.c file has the following around line 63:
<br>
<p>#include &lt;net/if.h&gt;
<br>
<p>Here is the explanation I have from PGI:
<br>
<p>&lt;&lt;&lt;&lt;&lt; Start Quote
<br>
For 64-bit only there might be an issue of 'not running/crashing'
<br>
when it tries to establish the connection.
<br>
<p>The reason is probably because a source file  includes &lt;net/if.h&gt;.
<br>
&lt;net/if.h&gt; has some source code that we don't support , namely
<br>
#pragma pack(4)
<br>
I think currently ignore it.
<br>
<p>The file is: opal/util/if.c  that  includes &lt;net/if.h&gt;.
<br>
You may succeed  by  including the  attached pgi.h instead of &lt;net/if.h&gt;.
<br>
End Quote &gt;&gt;&gt;&gt;&gt;
<br>
<p>I followed this advise along with editing the 
<br>
share/openmpi/mpif*-wrapper-data.txt files to have full paths to the 
<br>
static libraries instead of just -lmpi_f90, -lmpi_f77, -lmpi, etc.
<br>
<p>Dave
<br>
<p>
<br><hr>
<ul>
<li>application/unknown attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15791/pgi.h">pgi.h</a>
</ul>
<!-- attachment="pgi.h" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Maybe in reply to:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
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
