<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  6 23:09:00 2006" -->
<!-- isoreceived="20060207040900" -->
<!-- sent="Mon, 06 Feb 2006 21:09:05 -0700" -->
<!-- isosent="20060207040905" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="New data support subsystem for ORTE" -->
<!-- id="7.0.0.16.2.20060206203357.02529758_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-06 23:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0717.php">Gleb Natapov: "question about {min,max}_{send,rdma}_size"</a>
<li><strong>Previous message:</strong> <a href="0715.php">Galen M. Shipman: "Re:  btl_openib_reg_mru_len parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>After several months of development, I have merged the new data 
<br>
support subsystem for ORTE into the trunk. I must provide one caveat 
<br>
of warning: I have made every effort to test the revised system, but 
<br>
cannot guarantee its operation in every condition and under every 
<br>
system. For one, I don't have access to every type of system to which 
<br>
ORTE/OMPI has been ported...and, to be honest, the trunk moves so 
<br>
quickly that I would never get this merged if I keep chasing the 
<br>
latest trunk version. Hence, you may see some degree of instability - 
<br>
hopefully, this will be minimal or non-existent, but it could happen.
<br>
<p>Those of you primarily interested in the MPI layer need read no 
<br>
further unless you intend to use any of the ORTE data types. For 
<br>
everyone else, please read on.
<br>
<p>The primary changes in this revision were:
<br>
<p>1. redefinition of several key data types, including the 
<br>
orte_data_value_t, orte_gpr_value_t, and orte_gpr_keyval_t 
<br>
structures. This was done in order to eliminate ALL knowledge of data 
<br>
types from the registry - the registry now has no knowledge of what 
<br>
is being stored. This allowed the second change...
<br>
<p>2. completely localize all data type functionality. In the prior 
<br>
version, a developer who changed a data type definition (e.g., adding 
<br>
an element to a defined structure) was required to make corresponding 
<br>
changes to functions that copied, deleted, compared, and printed the 
<br>
data type in a number of places. In particular, this was required in 
<br>
at least three locations within the registry subsystem! This level of 
<br>
complexity caused a number of errors to occur, driven by someone 
<br>
changing a structure and not catching the necessary changes 
<br>
everywhere else. This resulted in unstable behavior that was very 
<br>
hard to debug and fix.
<br>
<p>The new data support subsystem resolves this problem by requiring the 
<br>
definer of a data type to provide several key functions:
<br>
<p>a. compare - how to compare two instances of the data type, providing 
<br>
a value of equal, value 1 greater, or value 2 greater. These three 
<br>
outputs are now defined values to ensure compatibility throughout the 
<br>
code base - please USE THEM.
<br>
<p>b. copy - how to copy one instance into a new data location, 
<br>
allocating memory dynamically to provide the necessary storage
<br>
<p>c. print - method to pretty-print the contents of the data type, 
<br>
essential for debugging and/or use by the registry &quot;dump&quot; functions
<br>
<p>d. size - method to compute the size of the specified data type 
<br>
instance, including the size of any non-static fields (e.g., a string variable)
<br>
<p>e. release - method for releasing a dynamically-allocated instance of 
<br>
the data type. In most cases, this function either does a free or an 
<br>
OBJ_RELEASE, but it could be used (for example) to provide a 
<br>
debugging version of a release function
<br>
<p>f. pack/unpack - how to pack/unpack an instance into an ORTE buffer 
<br>
for transmission
<br>
<p>In addition, the data type definition requires that two values be provided:
<br>
<p>a. boolean flag indicating whether the data type is structured or 
<br>
not. This was provided in addition to the release function to allow a 
<br>
developer to (for example) define a debugging release independent of 
<br>
the &quot;flavor&quot; (i.e., structured or not) of the data type
<br>
<p>b. a name for the data type. This is required to be unique.
<br>
<p>All of these functions have been provided for the &quot;standard&quot; data 
<br>
types (ints, bool, etc.), so you don't have to worry about those. For 
<br>
an example of these functions, you can look either at the orte/dss 
<br>
functions (where the standard data types are supported) or at the 
<br>
orte/mca/gpr/base/data_type_support directory where more complex 
<br>
types are defined. The orte/dss/dss_open_close.c and 
<br>
orte/mca/gpr/base/gpr_base_open.c functions include the data type 
<br>
registration calls. I have also provided the functions for all of the 
<br>
current orte defined data types.
<br>
<p>Two other functional entries (set and get) to the data support 
<br>
subsystem were created that are intended to mimic true 
<br>
object-oriented programming for the orte_data_value_t object. There 
<br>
are times in the code where it is more convenient to work with 
<br>
statically-defined variables. Using the &quot;copy&quot; function, however, to 
<br>
move data from one object to another causes memory to be dynamically 
<br>
allocated. The set/get functions provide a &quot;safe&quot; method for doing 
<br>
this statically.
<br>
<p>In addition to changing the data type definitions, two &quot;helper&quot; 
<br>
functions were created to support the gpr_value and gpr_keyval 
<br>
structures. In working through the code, I found a number of 
<br>
instances where people had forgotten to completely define these 
<br>
structures, leaving some fields unintentionally &quot;blank&quot;. This 
<br>
appeared to cause problems at times, and definitely caused headaches 
<br>
when making this transition. In addition, there was a lot of 
<br>
duplicative and painful code due to all the error checking required 
<br>
while building one of these structures.
<br>
<p>To simplify things, I created two new gpr API functions: create_value 
<br>
and create_keyval. Each of these takes as arguments the values to be 
<br>
placed in their respective fields, and will return to you a fully 
<br>
built structure with all the desired error checking for memory 
<br>
availability etc. Using these functions will also protect you against 
<br>
any future changes to the system. The only negative is that these 
<br>
functions dynamically allocate the required memory.
<br>
<p>I hope that helps to explain the changes. As you can see from the 
<br>
commit, this hit a large number of functions. I have provided unit 
<br>
tests for all the data types within the revised data support system 
<br>
that help illustrate how that system is used. In particular, you can 
<br>
look at test/dss and at test/mca/gpr (the gpr_dt_xxx functions) for examples.
<br>
<p>Please feel free to holler with questions - and do please let me know 
<br>
if you find any problems with the revisions.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0717.php">Gleb Natapov: "question about {min,max}_{send,rdma}_size"</a>
<li><strong>Previous message:</strong> <a href="0715.php">Galen M. Shipman: "Re:  btl_openib_reg_mru_len parameter"</a>
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
