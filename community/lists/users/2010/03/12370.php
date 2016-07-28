<?
$subject_val = "[OMPI users] Signal code: Address not mapped (1) error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 09:12:03 2010" -->
<!-- isoreceived="20100317131203" -->
<!-- sent="Wed, 17 Mar 2010 15:11:58 +0200" -->
<!-- isosent="20100317131158" -->
<!-- name="alev mutlu" -->
<!-- email="koor230_at_[hidden]" -->
<!-- subject="[OMPI users] Signal code: Address not mapped (1) error" -->
<!-- id="d23942591003170611m36f56c03r8a8d360a4983cb3f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Signal code: Address not mapped (1) error<br>
<strong>From:</strong> alev mutlu (<em>koor230_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 09:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Previous message:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Reply:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi the following codes compiles fine but gives some run time errors.
<br>
Ant suggestions to fix the problem.
<br>
<p>cheers
<br>
<p><p>Code
<br>
<p>#include &lt;boost/mpi/environment.hpp&gt;
<br>
#include &lt;boost/mpi/communicator.hpp&gt;
<br>
#include &lt;boost/mpi/collectives.hpp&gt;
<br>
#include &lt;boost/thread/barrier.hpp&gt;
<br>
#include &lt;boost/thread/mutex.hpp&gt;
<br>
#include &lt;boost/config.hpp&gt;
<br>
#include &lt;boost/archive/text_oarchive.hpp&gt;
<br>
#include &lt;boost/archive/text_iarchive.hpp&gt;
<br>
#include &lt;boost/serialization/access.hpp&gt;
<br>
#include &lt;boost/serialization/string.hpp&gt;
<br>
#include &lt;boost/mpi/skeleton_and_content.hpp&gt;
<br>
#include &lt;boost/mpi/datatype.hpp&gt;
<br>
#include &lt;boost/mpi/allocator.hpp&gt;
<br>
#include &lt;boost/archive/tmpdir.hpp&gt;
<br>
#include &lt;boost/serialization/utility.hpp&gt;
<br>
#include &lt;boost/serialization/base_object.hpp&gt;
<br>
#include &lt;boost/mpi.hpp&gt;
<br>
#include &lt;boost/tokenizer.hpp&gt;
<br>
#include &lt;boost/archive/tmpdir.hpp&gt;
<br>
#include &lt;boost/archive/binary_oarchive.hpp&gt;
<br>
#include &lt;boost/serialization/export.hpp&gt;
<br>
#include &lt;boost/serialization/base_object.hpp&gt;
<br>
#include &lt;boost/serialization/utility.hpp&gt;
<br>
#include &lt;boost/serialization/hash_map.hpp&gt;
<br>
#include &lt;boost/serialization/map.hpp&gt;
<br>
<p><p><p>#include &lt;string&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;vector&gt;
<br>
#include &lt;fstream&gt;
<br>
<p>#define MASTER 0
<br>
<p>int arraySize = 7;
<br>
<p>using namespace std;
<br>
namespace mpi = boost::mpi;
<br>
<p>struct field {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;string field_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;string field_type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;string field_ref;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;string field_colType;
<br>
<p>};
<br>
<p>namespace boost {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;namespace serialization{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;template&lt;class Archive&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void serialize(Archive &amp; ar, struct field &amp; f,  unsigned int
<br>
version){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ar &amp; f.field_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ar &amp; f.field_type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ar &amp; f.field_ref;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ar &amp; f.field_colType;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi::environment env(argc, argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi::communicator world;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int m_mySize, w_mySize, kk,i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct field *relAllValues;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct field *relMyValues;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vector&lt;struct field&gt; C;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct field c;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;w_mySize = arraySize / world.size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;w_mySize = &quot; &lt;&lt; w_mySize &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (world.rank() == MASTER){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; arraySize; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.field_name = &quot;field_name=&quot; ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.field_type = &quot;field_type=&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.field_ref = &quot;field_ref=&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.field_colType = &quot;field_colType=&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.push_back(c);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_mySize = arraySize / world.size() + arraySize % world.size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;relMyValues = (struct field *) malloc(sizeof(struct field) *
<br>
w_mySize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;relAllValues = (struct field *) malloc(sizeof(struct field) *
<br>
arraySize);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;relMyValues = (struct field *) malloc(sizeof(struct field) *
<br>
w_mySize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (world.rank() == MASTER){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scatter(world, C, relMyValues, w_mySize, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scatter(world, C, relMyValues, w_mySize, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>and the run time errors
<br>
<p>[ceng34:00724] *** Process received signal ***
<br>
[ceng34:00724] Signal: Segmentation fault (11)
<br>
[ceng34:00724] Signal code: Address not mapped (1)
<br>
[ceng34:00724] Failing at address: 0xfffffffffffffff8
<br>
[ceng34:00724] [ 0] /lib64/libpthread.so.0 [0x315880de80]
<br>
[ceng34:00724] [ 1]
<br>
/usr/lib64/libstdc++.so.6(_ZN9__gnu_cxx18__exchange_and_addEPVii+0x2)
<br>
[0x385dab7672]
<br>
[ceng34:00724] [ 2] /usr/lib64/libstdc++.so.6(_ZNSs6assignERKSs+0x9b)
<br>
[0x385da9ca4b]
<br>
[ceng34:00724] [ 3] test-boost(_ZN5fieldaSERKS_+0x47) [0x42197f]
<br>
[ceng34:00724] [ 4]
<br>
test-boost(_ZNSt6__copyILb0ESt26random_access_iterator_tagE4copyIPK5fieldPS3_EET0_T_S8_S7_+0x3c)
<br>
[0x4221be]
<br>
[ceng34:00724] [ 5]
<br>
test-boost(_ZSt10__copy_auxIPK5fieldPS0_ET0_T_S5_S4_+0x29) [0x422203]
<br>
[ceng34:00724] [ 6]
<br>
test-boost(_ZNSt13__copy_normalILb0ELb0EE6copy_nIPK5fieldPS2_EET0_T_S7_S6_+0x25)
<br>
[0x42222b]
<br>
[ceng34:00724] [ 7] test-boost(_ZSt4copyIPK5fieldPS0_ET0_T_S5_S4_+0x2d)
<br>
[0x42225b]
<br>
[ceng34:00724] [ 8]
<br>
test-boost(_ZN5boost3mpi6detail12scatter_implI5fieldEEvRKNS0_12communicatorEPKT_PS7_iiN4mpl_5bool_ILb0EEE+0x90)
<br>
[0x42a630]
<br>
[ceng34:00724] [ 9]
<br>
test-boost(_ZN5boost3mpi7scatterI5fieldEEvRKNS0_12communicatorEPKT_PS6_ii+0x50)
<br>
[0x42b162]
<br>
[ceng34:00724] [10]
<br>
test-boost(_ZN5boost3mpi7scatterI5fieldEEvRKNS0_12communicatorERKSt6vectorIT_SaIS7_EEPS7_ii+0x55)
<br>
[0x42b1db]
<br>
[ceng34:00724] [11] test-boost(main+0x20e) [0x420880]
<br>
[ceng34:00724] [12] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3157c1d8b4]
<br>
[ceng34:00724] [13] test-boost(__gxx_personality_v0+0x169) [0x420489]
<br>
[ceng34:00724] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 724 on node ceng34-ib exited on
<br>
signal 11 (Segmentation fault).
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Previous message:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Reply:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
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
