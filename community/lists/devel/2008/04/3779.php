<?
$subject_val = "[OMPI devel] [RFC] mca_base_select()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 18:35:47 2008" -->
<!-- isoreceived="20080429223547" -->
<!-- sent="Tue, 29 Apr 2008 17:35:41 -0500" -->
<!-- isosent="20080429223541" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] mca_base_select()" -->
<!-- id="8E125FF1-9E10-4E85-ADB2-B4A1C186A6CF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] mca_base_select()<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 18:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3780.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3778.php">Ralf Wildenhues: "[OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3828.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3828.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:  Add mca_base_select() and adjust frameworks &amp; components to use  
<br>
it.
<br>
Why:   Consolidation of code for general goodness.
<br>
Where: <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play">https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play</a>
<br>
When:  Code ready now. Documentation ready soon.
<br>
Timeout: May 6, 2008 (After teleconf) [1 week]
<br>
<p>Discussion:
<br>
-----------
<br>
For a number of years a few developers have been talking about  
<br>
creating a MCA base component selection function. For various reasons  
<br>
this was never implemented. Recently I decided to give it a try.
<br>
<p>A base select function will allow Open MPI to provide completely  
<br>
consistent selection behavior for many of its frameworks (18 of 31 to  
<br>
be exact at the moment). The primary goal of this work is to improving  
<br>
code maintainability through code reuse. Other benefits also result  
<br>
such as a slightly smaller memory footprint.
<br>
<p>The mca_base_select() function represented the most commonly used  
<br>
logic for component selection: Select the one component with the  
<br>
highest priority and close all of the not selected components. This  
<br>
function can be found at the path below in the branch:
<br>
&nbsp;&nbsp;opal/mca/base/mca_base_components_select.c
<br>
<p>To support this I had to formalize a query() function in the  
<br>
mca_base_component_t of the form:
<br>
&nbsp;&nbsp;&nbsp;int mca_base_query_component_fn(mca_base_module_t **module, int  
<br>
*priority);
<br>
<p>This function is specified after the open and close component  
<br>
functions in this structure as to allow compatibility with frameworks  
<br>
that do not use the base selection logic. Frameworks that do *not* use  
<br>
this function are *not* effected by this commit. However, every  
<br>
component in the frameworks that use the mca_base_select function must  
<br>
adjust their component query function to fit that specified above.
<br>
<p>18 frameworks in Open MPI have been changed. I have updated all of the  
<br>
components in the 18 frameworks available in the trunk on my branch.  
<br>
The effected frameworks are:
<br>
&nbsp;&nbsp;- OPAL Carto
<br>
&nbsp;&nbsp;- OPAL crs
<br>
&nbsp;&nbsp;- OPAL maffinity
<br>
&nbsp;&nbsp;- OPAL memchecker
<br>
&nbsp;&nbsp;- OPAL paffinity
<br>
&nbsp;&nbsp;- ORTE errmgr
<br>
&nbsp;&nbsp;- ORTE ess
<br>
&nbsp;&nbsp;- ORTE Filem
<br>
&nbsp;&nbsp;- ORTE grpcomm
<br>
&nbsp;&nbsp;- ORTE odls
<br>
&nbsp;&nbsp;- ORTE pml
<br>
&nbsp;&nbsp;- ORTE ras
<br>
&nbsp;&nbsp;- ORTE rmaps
<br>
&nbsp;&nbsp;- ORTE routed
<br>
&nbsp;&nbsp;- ORTE snapc
<br>
&nbsp;&nbsp;- OMPI crcp
<br>
&nbsp;&nbsp;- OMPI dpm
<br>
&nbsp;&nbsp;- OMPI pubsub
<br>
<p>There was a question of the memory footprint change as a result of  
<br>
this commit. I used 'pmap' to determine process memory footprint of a  
<br>
hello world MPI program. Static and Shared build numbers are below  
<br>
along with variations on launching locally and to a single node  
<br>
allocated by SLURM. All of this was on Indiana University's Odin  
<br>
machine. We compare against the trunk (r18276) representing the last  
<br>
SVN sync point of the branch.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process(shared)| Trunk    | Branch  | Diff (Improvement)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------+----------+---------+-------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun (orted) |   39976K |  36828K | 3148K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (0)      |  229288K | 229268K |   20K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (1)      |  229288K | 229268K |   20K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------+----------+---------+-------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun         |   40032K |  37924K | 2108K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orted          |   34720K |  34660K |   60K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (0)      |  228404K | 228384K |   20K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (1)      |  228404K | 228384K |   20K
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process(static)| Trunk    | Branch  | Diff (Improvement)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------+----------+---------+-------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun (orted) |   21384K |  21372K |  12K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (0)      |  194000K | 193980K |  20K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (1)      |  194000K | 193980K |  20K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------+----------+---------+-------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun         |   21384K |  21372K |  12K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orted          |   21208K |  21196K |  12K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (0)      |  193116K | 193096K |  20K
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hello (1)      |  193116K | 193096K |  20K
<br>
<p>As you can see there are some small memory footprint improvements on  
<br>
my branch that result from this work. The size of the Open MPI project  
<br>
shrinks a bit as well. This commit cuts between 3,500 and 2,000 lines  
<br>
of code (depending on how you count) so about a ~1% code shrink.
<br>
<p>The branch is stable in all of the testing I have done, but there are  
<br>
some platforms on which I cannot test. So please give this branch a  
<br>
try and let me know if you find any problems.
<br>
<p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3780.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3778.php">Ralf Wildenhues: "[OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3828.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3828.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
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
