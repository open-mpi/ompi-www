<?
$subject_val = "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 07:13:08 2009" -->
<!-- isoreceived="20090201121308" -->
<!-- sent="Sun, 1 Feb 2009 07:13:02 -0500" -->
<!-- isosent="20090201121302" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi" -->
<!-- id="76348907-AF81-47F1-9323-3C357C083CE9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18819.30496.279437.227087_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 07:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2009, at 4:54 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; | &gt; where things end in the loop over oapl_list() elements.  I still  
</span><br>
<span class="quotelev1">&gt; see a
</span><br>
<span class="quotelev1">&gt; | &gt; fprintf() statment just before
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;   if (MCA_SUCCESS == component-&gt;mca_register_component_params()) {
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; in the middle of the open_components function in the file
</span><br>
<span class="quotelev1">&gt; | &gt; mca_base_components_open.c
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Do you know if component is non-NULL and has a sensible value (i.e.,
</span><br>
<span class="quotelev1">&gt; | pointing to a valid component)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do not. Everything (in particular below /etc/openmpi/) is at default  
</span><br>
<span class="quotelev1">&gt; values
</span><br>
<span class="quotelev1">&gt; with the sole exception of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # edd 18 Dec 2008
</span><br>
<span class="quotelev1">&gt; mca_component_show_load_errors = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could that kill it?  [ Goes off and tests... ] No, still dies with  
</span><br>
<span class="quotelev1">&gt; segfault
</span><br>
<span class="quotelev1">&gt; in open_components.
</span><br>
<p>FWIW: mca_component_show_load_errors should only affect conditional  
<br>
output of some warning messages.
<br>
<p><span class="quotelev1">&gt; | Does ompi_info work?  (ompi_info uses this exact same code to find/
</span><br>
<span class="quotelev1">&gt; | open components)  If ompi_info fails, you should be able to attach a
</span><br>
<span class="quotelev1">&gt; | debugger to that, since it's a serial and [relatively]  
</span><br>
<span class="quotelev1">&gt; straightforward
</span><br>
<span class="quotelev1">&gt; | app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, ompi_info happily runs and returns around 111 lines. It seems  
</span><br>
<span class="quotelev1">&gt; to loop
</span><br>
<span class="quotelev1">&gt; over around 25 mca components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is otherwise healthy and happy.  It's just that Rmpi does  
</span><br>
<span class="quotelev1">&gt; not get
</span><br>
<span class="quotelev1">&gt; along with Open MPI 1.3 .... but this happens to be my personal use- 
</span><br>
<span class="quotelev1">&gt; case :-/
</span><br>
<p>Quite puzzling.  This portion of the code has already successfully  
<br>
opened the components and is looping over a list of the components  
<br>
that were found.  It *sounds* like that list has somehow gotten  
<br>
corrupted.
<br>
<p>Is there any way you can check that the values of component and  
<br>
component-&gt;mca_register_component_params are non-NULL / valid?
<br>
<p>FWIW, component should be a pointer to the struct that we use to  
<br>
represent plugins; it's a member of the list element from the list of  
<br>
found components.  Here's some code from right above the problematic  
<br>
line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (item = opal_list_get_first(src);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_get_end(src) != item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = opal_list_get_next(item)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cli = (mca_base_component_list_item_t *) item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component = cli-&gt;cli_component;
<br>
<p>So you might want to examine cli as well and ensure that it has  
<br>
sensible values (the casting trick that we do is fairly common in the  
<br>
OMPI code base -- the list item is the first data member of the  
<br>
mca_base_component_list_item_t, so we can cast to/from it as required).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
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
